<?php

namespace Modules\Ticket\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Ticket\Entities\Ticket;
use Modules\Ticket\Entities\TicketCategory;
use Modules\Ticket\Http\Requests\TicketCategoryRequest;
use Modules\Ticket\Http\Requests\TicketRequest;

class TicketCategoryController extends Controller
{
    use Responses, Uploader;

    public function index()
    {
        $objects = TicketCategory::Search(request('search'))
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        return view('ticket::dashboard.ticket-category.list', compact('objects'));
    }

    public function create()
    {
        return view('ticket::dashboard.ticket-category.form');
    }

    public function store(TicketCategoryRequest $request)
    {
        TicketCategory::create($request->validated());
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'ticket-categories.index');
    }

    public function edit(TicketCategory $ticket_category)
    {
        return view('ticket::dashboard.ticket-category.form')->with('object', $ticket_category);
    }

    public function update(TicketCategoryRequest $request, TicketCategory $ticket_category)
    {
        $ticket_category->update($request->validated());
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'ticket-categories.index');
    }

    public function destroy(TicketCategory $ticket_category)
    {
        $ticket_category->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'ticket-categories.index');
    }
}
