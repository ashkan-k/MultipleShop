<?php

namespace Modules\PageBuilder\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\PageBuilder\Entities\PageBuilder;
use Modules\PageBuilder\Http\Requests\PageBuilderRequest;

class PageBuilderController extends Controller
{
    use Responses, Uploader;

    public function index()
    {
        if (session()->get('current_lang')) {
            app()->setLocale(session('current_lang'));
        }

        $objects = PageBuilder::Search(request('search'))
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));
        return view('pagebuilder::dashboard.list', compact('objects'));
    }

    public function create()
    {
        $icons = PageBuilder::GetFontAwesomeIcons();
        return view('pagebuilder::dashboard.form', compact('icons'));
    }

    public function store(PageBuilderRequest $request)
    {
        $image = $this->UploadFile($request, 'image', 'pages_images', $request->title);

        $data = $request->validated();
        $data['is_active'] = $request->has('is_active') ?? false;
        PageBuilder::create(array_merge($data, ['image' => $image]));

        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'pages.index');
    }

    public function edit(PageBuilder $page)
    {
        $icons = PageBuilder::GetFontAwesomeIcons();
        return view('pagebuilder::dashboard.form', compact('icons'))->with('object', $page);
    }

    public function update(PageBuilderRequest $request, PageBuilder $page)
    {
        $image = $this->UploadFile($request, 'image', 'pages_images', $page->title, $page->image);

        $data = $request->validated();
        $data['is_active'] = $request->has('is_active') ?? false;
        $page->update(array_merge($data, ['image' => $image]));

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
