<?php

namespace Modules\Ticket\Http\Controllers\Dashboard;

use App\Http\Traits\Helpers;
use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Modules\Email\Emails\SendEmailMail;
use Modules\Setting\Entities\Setting;
use Modules\Sms\Helpers\sms_helper;
use Modules\Ticket\Entities\Ticket;
use Modules\Ticket\Entities\TicketCategory;
use Modules\Ticket\Http\Requests\TicketRequest;
use Modules\User\Entities\User;

class TicketController extends Controller
{
    use Responses, Uploader, Helpers;

    private $relations = ['user', 'category'];

    public function index()
    {
        $objects = Ticket::with($this->relations)
            ->Search(request('search'))
            ->Filter(\request())
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        $status_filters = [['waiting', 'در انتظار'], ['answered', 'پاسخ داده شده'], ['close', 'بسته']];
        $filter_categories = [];
        foreach (TicketCategory::all()->pluck('title', 'id') as $key => $item){
            $filter_categories[] = [$key, $item];
        }
        $filter_users = [];
        foreach (User::all() as $item){
            $filter_users[] = [$item->id, $item->full_name()];
        }

        return view('ticket::dashboard.ticket.list', compact('objects', 'status_filters', 'filter_categories', 'filter_users'));
    }

    public function create()
    {
        $categories = TicketCategory::all();
        $users = User::all();
        return view('ticket::dashboard.ticket.form', compact('categories', 'users'));
    }

    public function store(TicketRequest $request)
    {
        $file = $this->UploadFile($request, 'file', 'ticket_files', auth()->id());

        $data = $request->validated();
        if (!isset($data['user_id'])){
            $data['user_id'] = auth()->id();
        }

        $ticket = Ticket::create(array_merge($data, ['file' => $file]));
        $admin_email = Setting::where('key', 'email')->first()->value;

        $user = User::findOrFail($data['user_id']);
        $message = [
            $ticket,
            sprintf(sms_helper::$SMS_PATTERNS['admin_ticket_submit'], $ticket->ticket_number, $user->full_name()),
            route('front.ticket-answers.show', ['locale' => app()->getLocale(), 'ticket' => $ticket->ticket_number]),
        ];
        $title = __('Ticket :title (:number)', ['title' => $ticket->title, 'number' => $ticket->ticket_number]);
        $template = 'email::emails/ticket/ticket_notification';

        try {
            Mail::to(strip_tags($admin_email))->send(new SendEmailMail($admin_email, $title, $message, $template));
        } catch (\Exception $exception) {}

        return $this->SuccessRedirect('تیکت شما با موفقیت ثبت شد.', 'tickets.index');
    }

    public function edit(Ticket $ticket)
    {
        if (auth()->user()->is_staff()) {
            $this->check_myself_queryset($ticket, 'web');
        }

        $categories = TicketCategory::all();
        $users = User::all();
        return view('ticket::dashboard.ticket.form', compact('categories', 'users'))->with('object', $ticket);
    }

    public function update(TicketRequest $request, Ticket $ticket)
    {
        $this->check_myself_queryset($ticket, 'web');
        $file = $this->UploadFile($request, 'file', 'ticket_files', auth()->id(), $ticket->file);

        $ticket->update(array_merge($request->validated(), ['file' => $file]));

        $message = [
            $ticket,
            sprintf(sms_helper::$SMS_PATTERNS['admin_ticket_submit'], $ticket->ticket_number, $ticket->user->full_name()),
            route('front.ticket-answers.show', ['locale' => app()->getLocale(), 'ticket' => $ticket->ticket_number]),
        ];
        $title = __('Ticket :title (:number)', ['title' => $ticket->title, 'number' => $ticket->ticket_number]);
        $template = 'email::emails/ticket/ticket_notification';

        $admin_email = Setting::where('key', 'email')->first()->value;

        try {
            Mail::to(strip_tags($admin_email))->send(new SendEmailMail($admin_email, $title, $message, $template));
        } catch (\Exception $exception) {}


        return $this->SuccessRedirect('تیکت شما با موفقیت ویرایش شد.', 'tickets.index');
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'tickets.index');
    }

    public function change_status(Ticket $ticket)
    {
        $ticket->update(['status' => \request('status')]);
        return $this->SuccessResponse('وضعیت آیتم مورد نظر با موفقیت تغییر یافت.');
    }
}
