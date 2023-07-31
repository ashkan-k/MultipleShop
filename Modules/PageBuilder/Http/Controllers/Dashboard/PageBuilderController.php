<?php

namespace Modules\PageBuilder\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\PageBuilder\Entities\PageBuilder;
use Modules\PageBuilder\Http\Requests\PageBuilderRequest;

class PageBuilderController extends Controller
{
    use Responses;

    public function index()
    {
        $objects = PageBuilder::Search(request('search'))
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));
        return view('pagebuilder::dashboard.list', compact('objects'));
    }

    public function create()
    {
        return view('pagebuilder::dashboard.form');
    }

    public function store(PageBuilderRequest $request)
    {
        $data = $request->validated();
        $data['is_active'] = $request->has('is_active') ?? false;
        PageBuilder::create($data);

        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'pages.index');
    }

    public function edit(PageBuilder $page)
    {
        return view('pagebuilder::dashboard.form')->with('object', $page);
    }

    public function update(PageBuilderRequest $request, PageBuilder $page)
    {
        $data = $request->validated();
        $data['is_active'] = $request->has('is_active') ?? false;
        $page->update($data);

        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'pages.index');
    }

    public function destroy(PageBuilder $page)
    {
        $page->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'pages.index');
    }

    public function change_status(PageBuilder $page)
    {
        $page->update(['is_active' => \request('is_active')]);
        return $this->SuccessResponse('وضعیت آیتم مورد نظر با موفقیت تغییر یافت.');
    }
}
