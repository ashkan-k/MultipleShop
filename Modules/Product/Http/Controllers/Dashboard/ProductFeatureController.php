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

    // Web Routes
    public function index()
    {
        $product = Product::findOrFail(\request('product'));
        $objects = ProductFeature::whereBelongsTo($product)
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        $features = $product->category->features()->get(['id', 'title', 'filter_type'])->toArray();
        return view('product::dashboard.product_features.list', compact('objects', 'product', 'features'));
    }

    public function destroy(ProductFeature $product_feature)
    {
        $product_feature->delete();

        $next_url = \request('next_url');
        return $this->SuccessRedirectUrl('آیتم مورد نظر با موفقیت حذف شد.', $next_url);
    }
}
