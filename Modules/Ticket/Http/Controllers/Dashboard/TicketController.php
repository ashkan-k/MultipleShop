<?php

namespace Modules\Ticket\Http\Controllers\Dashboard;

use App\Http\Traits\Helpers;
use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Ticket\Entities\Ticket;
use Modules\Ticket\Http\Requests\TicketRequest;

class TicketController extends Controller
{
    use Responses, Uploader, Helpers;

    public function index()
    {
        $objects = Ticket::Search(request('search'))
            ->Filter(\request())
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));
        $status_filters = [['waiting', 'در انتظار'], ['answered', 'پاسخ داده شده'], ['close', 'بسته']];

        return view('ticket::dashboard.ticket.list', compact('objects', 'status_filters'));
    }

    public function create()
    {
        return view('ticket::dashboard.ticket.form');
    }

    public function store(TicketRequest $request)
    {
        $file = $this->UploadFile($request, 'file', 'ticket_files', auth()->id());

        auth()->user()->tickets()->create(array_merge($request->except(['status']), ['file' => $file]));
        return $this->SuccessRedirect('تیکت شما با موفقیت ثبت شد.', 'tickets.index');
    }

    public function edit(Ticket $ticket)
    {
        if (auth()->user()->is_staff()) {
            $this->check_myself_queryset($ticket, 'web');
        }
        return view('ticket::dashboard.ticket.form')->with('object', $ticket);
    }

    public function update(TicketRequest $request, Ticket $ticket)
    {
        if (auth()->user()->is_staff()) {
            $this->check_myself_queryset($ticket, 'web');
        }
        $file = $this->UploadFile($request, 'file', 'ticket_files', auth()->id(), $ticket->file);

        $ticket->update(array_merge($request->except(['status', 'user_id']), ['file' => $file]));
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
