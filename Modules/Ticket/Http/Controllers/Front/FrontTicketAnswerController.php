<?php

namespace Modules\Ticket\Http\Controllers\Front;

use App\Http\Traits\Helpers;
use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
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
        }else{
            $ticket->update(['status' => 'waiting']);
        }

        return $this->SuccessRedirect(__('Your answer has been successfully registered.'), 'front.ticket-answers.show', [], $ticket->id);
    }
}
