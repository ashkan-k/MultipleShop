<?php

namespace Modules\Product\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Brand;
use Modules\Product\Http\Requests\BrandRequest;

class BrandController extends Controller
{
    use Responses;

    public function index()
    {
        $objects = Brand::Search(request('search'))
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        return view('product::dashboard.brands.list', compact('objects'));
    }

    public function create()
    {
        return view('product::dashboard.brands.form');
    }

    public function store(BrandRequest $request)
    {
        Brand::create($request->validated());
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'brands.index');
    }

    public function edit(Brand $color)
    {
        return view('product::dashboard.brands.form')->with('object', $color);
    }

    public function update(BrandRequest $request, Brand $color)
    {
        $color->update($request->validated());
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'brands.index');
    }

    public function destroy(Brand $color)
    {
        $color->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'brands.index');
    }
}
