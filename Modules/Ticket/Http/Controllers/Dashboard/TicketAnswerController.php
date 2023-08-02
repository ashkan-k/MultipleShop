<?php

namespace Modules\Ticket\Http\Controllers\Dashboard;

use App\Http\Traits\Helpers;
use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Sms\Helpers\sms_helper;
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
            $manager_text = sprintf(sms_helper::$SMS_PATTERNS['user_ticket_answer_submit'], $ticket->title, $ticket->ticket_number);
        } else {
            $ticket->update(['status' => 'waiting']);
            $manager_text = sprintf(sms_helper::$SMS_PATTERNS['admin_ticket_answer_submit'], $ticket->title, $ticket->ticket_number);
        }

        dispatch(new SendSmsJob(auth()->user()->phone, $manager_text));

        return $this->SuccessRedirect(__('Your answer has been successfully registered.'), 'ticket-answers.show', [], $ticket->id);
    }
}
