<?php

namespace Modules\Guide\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Guide\Entities\Guide;
use Modules\Guide\Http\Requests\GuideRequest;

class GuideController extends Controller
{
    use Responses, Uploader;

    public function index()
    {
        $objects = Guide::Search(request('search'))
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        return view('guide::dashboard.list', compact('objects'));
    }

    public function create()
    {
        $parents = Guide::all();
        return view('guide::dashboard.form', compact('parents'));
    }

    public function store(GuideRequest $request)
    {
        $image = $this->UploadFile($request, 'image', 'guide_images', $request->title);

        Guide::create(array_merge($request->validated(), ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'guides.index');
    }

    public function edit(Guide $guide)
    {
        return view('guide::dashboard.form')->with('object', $guide);
    }

    public function update(GuideRequest $request, Guide $guide)
    {
        $image = $this->UploadFile($request, 'image', 'guide_images', $guide->title, $guide->image);

        if ($image != $guide->image) {
            $this->DeleteFile($guide->image);
        }

        $guide->update(array_merge($request->validated(), ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'guides.index');
    }

    public function destroy(Guide $guide)
    {
        $guide->delete();
        $this->DeleteFile($guide->image);
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'guides.index');
    }
}
