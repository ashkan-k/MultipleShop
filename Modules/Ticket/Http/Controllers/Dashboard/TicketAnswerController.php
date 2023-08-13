<?php

namespace Modules\Ticket\Http\Controllers\Dashboard;

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
use Modules\Sms\Jobs\SendSmsJob;
use Modules\Ticket\Entities\Ticket;
use Modules\Ticket\Http\Requests\TicketAnswerRequest;

class TicketAnswerController extends Controller
{
    use Responses, Helpers, Uploader;

    public function show(Ticket $ticket)
    {
        if (!auth()->user()->is_staff()) {
            $this->check_myself_queryset($ticket, 'web');
        }

        $answers = $ticket->answers()->with('user')->get();
        return view('ticket::dashboard.ticket-answer.form', compact('ticket', 'answers'));
    }

    public function store(TicketAnswerRequest $request, Ticket $ticket)
    {
        $file = $this->UploadFile($request, 'file', 'ticket_answers_files', auth()->id());
        $data = [
            'user_id' => auth()->id(),
            'text' => $request->text,
            'file' => $file,
        ];

        $ticket->answers()->create($data);

        if (auth()->id() != $ticket->user_id) {
            $ticket->update(['status' => 'answered']);
            $email_pattern = 'user_ticket_answer_submit';
            $receiver = $ticket->user ? $ticket->user->phone : '---';
            $ticket_link = route('front.ticket-answers.show', ['locale' => app()->getLocale(), 'ticket' => $ticket->ticket_number]);
        } else {
            $ticket->update(['status' => 'waiting']);
            $email_pattern = 'admin_ticket_answer_submit';
            $receiver = Setting::where('key', 'email')->first()->value;
            $ticket_link = route('front.ticket-answers.show', ['locale' => app()->getLocale(), 'ticket' => $ticket->ticket_number]);
        }

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

        return $this->SuccessRedirect(__('Your answer has been successfully registered.'), 'ticket-answers.show', [], $ticket->id);
    }
}
