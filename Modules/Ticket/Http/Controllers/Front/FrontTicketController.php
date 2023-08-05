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
use Modules\Sms\Jobs\SendSmsJob;
use Modules\Ticket\Entities\Ticket;
use Modules\Ticket\Entities\TicketCategory;
use Modules\Ticket\Http\Requests\TicketRequest;
use Modules\User\Entities\User;

class FrontTicketController extends Controller
{
    use Responses, Uploader, Helpers;

    public function index()
    {
        return view('ticket::front.tickets');
    }

    public function create()
    {
        $categories = TicketCategory::all();
        return view('ticket::front.ticket.form', compact('categories'));
    }

    public function store(TicketRequest $request)
    {
        $file = $this->UploadFile($request, 'file', 'ticket_files', auth()->id());
        $ticket = auth()->user()->tickets()->create(array_merge($request->validated(), ['file' => $file]));

        $admin_email = Setting::where('key', 'email')->first()->value;

        $user = User::findOrFail($data['user_id']);
        $message = [
            $ticket,
            sprintf(email_helpers::$EMAIL_PATTERNS['admin_ticket_submit'], $ticket->ticket_number, $user->full_name()),
            route('front.ticket-answers.show', ['locale' => app()->getLocale(), 'ticket' => $ticket->ticket_number]),
        ];
        $title = __('Ticket :title (:number)', ['title' => $ticket->title, 'number' => $ticket->ticket_number]);
        $template = 'email::emails/ticket/ticket_notification';

        try {
            Mail::to(strip_tags($admin_email))->send(new SendEmailMail($admin_email, $title, $message, $template));
        } catch (\Exception $exception) {
        }

        return $this->SuccessRedirect(__('Your ticket has been successfully registered.'), 'front.tickets.index');
    }

    public function edit($lang, Ticket $ticket)
    {
        if (auth()->user()->is_staff()) {
            $this->check_myself_queryset($ticket, 'web');
        }

        $categories = TicketCategory::all();
        return view('ticket::front.ticket.form', compact('categories'))->with('object', $ticket);
    }

    public function update(TicketRequest $request, $lang, Ticket $ticket)
    {
        $this->check_myself_queryset($ticket, 'web');
        $file = $this->UploadFile($request, 'file', 'ticket_files', auth()->id(), $ticket->file);

        $data = $request->validated();
        $data['user_id'] = auth()->id();
        $ticket->update(array_merge($data, ['file' => $file]));

        $message = [
            $ticket,
            sprintf(email_helpers::$EMAIL_PATTERNS['admin_ticket_edit'], $ticket->ticket_number, $ticket->user->full_name()),
            route('front.ticket-answers.show', ['locale' => app()->getLocale(), 'ticket' => $ticket->ticket_number]),
        ];
        $title = __('Ticket :title (:number)', ['title' => $ticket->title, 'number' => $ticket->ticket_number]);
        $template = 'email::emails/ticket/ticket_notification';

        $admin_email = Setting::where('key', 'email')->first()->value;

        try {
            Mail::to(strip_tags($admin_email))->send(new SendEmailMail($admin_email, $title, $message, $template));
        } catch (\Exception $exception) {
        }

        return $this->SuccessRedirect(__('Your ticket has been edited successfully.'), 'front.tickets.index');
    }

    public function destroy($lang, Ticket $ticket)
    {
        $this->check_myself_queryset($ticket, 'web');

        $message = [
            $ticket,
            sprintf(email_helpers::$EMAIL_PATTERNS['admin_ticket_delete'], $ticket->ticket_number, $ticket->user->full_name()),
            route('front.ticket-answers.show', ['locale' => app()->getLocale(), 'ticket' => $ticket->ticket_number]),
        ];
        $title = __('Ticket :title (:number)', ['title' => $ticket->title, 'number' => $ticket->ticket_number]);
        $template = 'email::emails/ticket/ticket_notification';

        $admin_email = Setting::where('key', 'email')->first()->value;

        try {
            Mail::to(strip_tags($admin_email))->send(new SendEmailMail($admin_email, $title, $message, $template));
        } catch (\Exception $exception) {
        }

        $ticket->delete();
        return $this->SuccessRedirect(__('Your ticket has been deleted successfully.'), 'front.tickets.index');
    }
}
