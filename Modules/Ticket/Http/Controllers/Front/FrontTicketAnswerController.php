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
use Modules\Ticket\Http\Requests\TicketAnswerRequest;

class FrontTicketAnswerController extends Controller
{
    use Responses, Helpers, Uploader;

    public function show(Ticket $ticket)
    {
        if (!auth()->user()->is_staff()) {
            $this->check_myself_queryset($ticket, 'web');
        }

        $answers = $ticket->answers()->with('user')->get();
        return view('ticket::front.ticket-answer.form', compact('ticket', 'answers'));
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
        } else {
            $ticket->update(['status' => 'waiting']);
            $email_pattern = 'admin_ticket_answer_submit';
        }

        $message = [
            $ticket,
            sprintf(email_helpers::$EMAIL_PATTERNS[$email_pattern], $ticket->title, $ticket->ticket_number),
            route('front.ticket-answers.show', ['locale' => app()->getLocale(), 'ticket' => $ticket->ticket_number]),
        ];

        $title = __('Ticket :title (:number)', ['title' => $ticket->title, 'number' => $ticket->ticket_number]);
        $template = 'email::emails/ticket/ticket_notification';
        $admin_email = Setting::where('key', 'email')->first()->value;

        try {
            Mail::to(strip_tags($admin_email))->send(new SendEmailMail($admin_email, $title, $message, $template));
        } catch (\Exception $exception) {
        }

        return $this->SuccessRedirect(__('Your answer has been successfully registered.'), 'front.ticket-answers.show', [], $ticket->id);
    }
}
