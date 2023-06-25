<?php

namespace Modules\Product\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Feature;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\ProductFeature;
use Modules\Product\Http\Requests\FeatureRequest;
use Modules\Product\Http\Requests\ProductFeatureRequest;

class ProductFeatureController extends Controller
{
    use Responses;

    public function index(Product $product)
    {
        $objects = ProductFeature::whereBelongsTo($product)
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        $features = Feature::all();
        return view('product::dashboard.product_features.list', compact('objects', 'product', 'features'));
    }

    public function store(ProductFeatureRequest $request)
    {
        ProductFeature::create($request->validated());
        return $this->SuccessResponse('آیتم مورد نظر با موفقیت ثبت شد.');
    }

    public function update(ProductFeatureRequest $request, ProductFeature $productFeature)
    {
        $productFeature->update($request->validated());
        return $this->SuccessResponse('آیتم مورد نظر با موفقیت ویرایش شد.');
    }

    public function destroy(ProductFeature $productFeature)
    {
        $productFeature->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'product-features.index');
    }
}
