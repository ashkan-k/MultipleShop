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

class ProductFeatureController extends Controller
{
    use Responses;

    public function index(Product $product)
    {
        $objects = $product->features()->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        $features = Feature::all();

        return view('product::dashboard.product_features.list', compact('objects', 'product', 'features'));
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

    public function destroy(ProductFeature $productFeature)
    {
        $productFeature->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'product-features.index');
    }
}
