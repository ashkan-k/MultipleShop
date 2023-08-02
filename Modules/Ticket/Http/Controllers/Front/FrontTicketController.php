<?php

namespace Modules\Ticket\Http\Controllers\Front;

use App\Http\Traits\Helpers;
use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Ticket\Entities\Ticket;
use Modules\Ticket\Entities\TicketCategory;
use Modules\Ticket\Http\Requests\TicketRequest;
use Modules\User\Entities\User;

class FrontTicketController extends Controller
{
    use Responses, Uploader, Helpers;

    private $relations = ['user', 'category'];

    public function index()
    {
        $objects = auth()->user()->tickets()->with($this->relations)
            ->Search(request('search'))
            ->Filter(\request())
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        return view('ticket::front.ticket.list', compact('objects'));
    }

    public function create()
    {
        $categories = TicketCategory::all();
        return view('ticket::front.ticket.form', compact('categories'));
    }

    public function store(TicketRequest $request)
    {
        $file = $this->UploadFile($request, 'file', 'ticket_files', auth()->id());
        auth()->user()->tickets()->create(array_merge($request->validated(), ['file' => $file]));
        return $this->SuccessRedirect(__('Your ticket has been successfully registered.'), 'tickets.index');
    }

    public function edit(Ticket $ticket)
    {
        if (auth()->user()->is_staff()) {
            $this->check_myself_queryset($ticket, 'web');
        }

        $categories = TicketCategory::all();
        return view('ticket::front.ticket.form', compact('categories'))->with('object', $ticket);
    }

    public function update(TicketRequest $request, Ticket $ticket)
    {
        $this->check_myself_queryset($ticket, 'web');
        $file = $this->UploadFile($request, 'file', 'ticket_files', auth()->id(), $ticket->file);

        $data = $request->validated();
        $data['user_id'] = auth()->id();
        $ticket->update(array_merge($data, ['file' => $file]));
        return $this->SuccessRedirect(__('Your ticket has been edited successfully.'), 'tickets.index');
    }

    public function destroy(Ticket $ticket)
    {
        $this->check_myself_queryset($ticket, 'web');
        $ticket->delete();
        return $this->SuccessRedirect(__('The desired item was successfully deleted.'), 'tickets.index');
    }
}
