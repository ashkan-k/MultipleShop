<?php

namespace Modules\Ticket\Http\Controllers\Front;

use App\Http\Traits\Helpers;
use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Modules\Email\Emails\SendEmailMail;
use Modules\Email\Helpers\email_helpers;
use Modules\Setting\Entities\Setting;
use Modules\Ticket\Entities\Ticket;
use Modules\Ticket\Http\Requests\TicketAnswerFrontRequest;
use Modules\Ticket\Http\Requests\TicketAnswerRequest;

class FrontTicketAnswerController extends Controller
{
    use Responses, Helpers, Uploader;

    public function show($lang, Ticket $ticket)
    {
        $this->check_myself_queryset($ticket, 'web');

        $last_answer = $ticket->answers()->latest()->first();
        if ((!$last_answer && $ticket->user_id != auth()->id()) || ($last_answer && $last_answer->user_id != auth()->id())) {
            $ticket->update(['is_read' => 1]);
        }

        $answers = $ticket->answers()->with('user')->get();
        return view('ticket::front.ticket-answer', compact('ticket', 'answers'));
    }

    public function store(TicketAnswerFrontRequest $request, $lang, Ticket $ticket)
    {
        $this->check_myself_queryset($ticket, 'web');

        $file = $this->UploadFile($request, 'file', 'ticket_answers_files', auth()->id());
        $data = [
            'user_id' => auth()->id(),
            'text' => $request->text,
            'file' => $file,
        ];

        $ticket->answers()->create($data);

        if (auth()->id() != $ticket->user_id) {
            $ticket->status = 'answered';

            $email_pattern = 'user_ticket_answer_submit';
            $receiver = $ticket->user ? $ticket->user->phone : '---';
            $ticket_link = route('front.ticket-answers.show', ['locale' => app()->getLocale(), 'ticket' => $ticket->ticket_number]);
        } else {
            $ticket->status = 'waiting';

            $email_pattern = 'admin_ticket_answer_submit';
            $receiver = Setting::where('key', 'email')->first()->value;
            $ticket_link = route('front.ticket-answers.show', ['locale' => app()->getLocale(), 'ticket' => $ticket->ticket_number]);
        }

        $ticket->is_read = 0;
        $ticket->save();

        $message = [
            $ticket,
            sprintf(email_helpers::$EMAIL_PATTERNS[$email_pattern], $ticket->title, $ticket->ticket_number),
            $ticket_link,
        ];

        $title = __('Ticket :title (:number)', ['title' => $ticket->title, 'number' => $ticket->ticket_number]);
        $template = 'email::emails/ticket/ticket_notification';

        try {
            Mail::to(strip_tags($receiver))->send(new SendEmailMail($receiver, $title, $message, $template));
        } catch (\Exception $exception) {
        }

        return $this->SuccessRedirect(__('Your answer has been successfully registered.'), 'front.ticket-answers.show', [], $ticket->ticket_number);
    }
}
