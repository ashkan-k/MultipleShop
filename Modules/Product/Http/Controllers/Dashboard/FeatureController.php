<?php

namespace Modules\Product\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Feature;
use Modules\Product\Entities\Product;
use Modules\Product\Http\Requests\FeatureRequest;

class FeatureController extends Controller
{
    use Responses;

    public function index()
    {
        $product = Product::findOrFail(\request('product_id'));
        $objects = Feature::Search(request('search'))
            ->where('product_id', $product->id)
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        $products = Product::all();

        return view('product::dashboard.features.list', compact('objects', 'product', 'products'));
    }

    public function create()
    {
        return view('product::dashboard.features.form');
    }

    public function store(FeatureRequest $request)
    {
        Feature::create($request->validated());
        return $this->SuccessResponse('آیتم مورد نظر با موفقیت ثبت شد.');
    }

    public function update(FeatureRequest $request, Feature $feature)
    {
        $feature->update($request->validated());
        return $this->SuccessResponse('آیتم مورد نظر با موفقیت ویرایش شد.');
    }

    public function destroy(Feature $feature)
    {
        $feature->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'features.index');
    }
}
