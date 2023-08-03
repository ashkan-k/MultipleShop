<?php

namespace Modules\Product\Http\Controllers\Dashboard\Api;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Gallery;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\ProductFeature;
use Modules\Product\Http\Requests\GalleryRequest;
use Modules\Product\Http\Requests\ProductFeatureRequest;
use Modules\Product\Http\Requests\ProductRequest;
use function Ramsey\Collection\offer;

class ApiProductFeatureController extends Controller
{
    use Responses;

    private $relations = ['product', 'feature'];

    public function index()
    {
        $product = Product::findOrFail(\request('product_id'));
        $objects = ProductFeature::whereBelongsTo($product)
            ->with($this->relations)->get();
        return $this->SuccessResponse($objects);
    }

    public function store(ProductFeatureRequest $request)
    {
        ProductFeature::create($request->validated());
        return $this->SuccessResponse('آیتم مورد نظر با موفقیت ثبت شد.');
    }

    public function update(ProductFeatureRequest $request, ProductFeature $product_feature)
    {
        $product_feature->update($request->validated());
        return $this->SuccessResponse('آیتم مورد نظر با موفقیت ویرایش شد.');
    }
}
