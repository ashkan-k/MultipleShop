<?php

namespace Modules\Product\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Color;
use Modules\Product\Http\Requests\ColorRequest;

class ColorController extends Controller
{
    use Responses;

    public function index()
    {
        $objects = Color::Search(request('search'))
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        return view('product::dashboard.colors.list', compact('objects'));
    }

    public function create()
    {
        return view('product::dashboard.colors.form');
    }

    public function store(ColorRequest $request)
    {
        Color::create($request->validated());
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'colors.index');
    }

    public function edit(Color $color)
    {
        return view('product::dashboard.colors.form')->with('object', $color);
    }

    public function update(ColorRequest $request, Color $color)
    {
        $color->update($request->validated());
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'colors.index');
    }

    public function destroy(Color $color)
    {
        $color->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'colors.index');
    }
}
