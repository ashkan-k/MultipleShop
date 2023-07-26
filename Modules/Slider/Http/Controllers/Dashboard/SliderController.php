<?php

namespace Modules\Slider\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Slider\Entities\Slider;
use Modules\Slider\Http\Requests\SliderRequest;

class SliderController extends Controller
{
    use Responses, Uploader;

    public function index()
    {
        $objects = Slider::Search(request('search'))
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        return view('slider::dashboard.list', compact('objects'));
    }

    public function create()
    {
        return view('slider::dashboard.form');
    }

    public function store(SliderRequest $request)
    {
        $image = $this->UploadFile($request, 'image', 'sliders', $request->title);

        Slider::create(array_merge($request->all(), ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'sliders.index');
    }

    public function edit(Slider $slider)
    {
        return view('slider::dashboard.form')->with('object', $slider);
    }

    public function update(SliderRequest $request, Slider $slider)
    {
        $image = $this->UploadFile($request, 'image', 'sliders', $slider->title, $slider->image);

        if ($image != $slider->image) {
            $this->DeleteFile($slider->image);
        }

        $slider->update(array_merge($request->all(), ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'sliders.index');
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();
        $this->DeleteFile($slider->image);
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'sliders.index');
    }
}
