<?php

namespace Modules\Product\Http\Controllers\Dashboard\Api;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Validation\ValidationException;
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

    private function CheckDuplicateFeature($product_id, $feature_id, $object_id=null)
    {
        if (ProductFeature::where('product_id', $product_id)->where('feature_id', $feature_id)->whereNot('id', $object_id)->exists()){
            throw ValidationException::withMessages(['feature_id' => 'این ویژگی قبلا به محصول الحاق شده است!'])->status(400);
        }
    }

    //

    public function index()
    {
        $objects = ProductFeature::where('product_id', \request('product_id'))
            ->with($this->relations)->get();
        return $this->SuccessResponse($objects);
    }

    public function store(ProductFeatureRequest $request)
    {
        $this->CheckDuplicateFeature($request->product_id, $request->feature_id);
        ProductFeature::create($request->validated());
        return $this->SuccessResponse('آیتم مورد نظر با موفقیت ثبت شد.');
    }

    public function update(ProductFeatureRequest $request, ProductFeature $products_feature)
    {
        $this->CheckDuplicateFeature($request->product_id, $request->feature_id, $products_feature->id);
        $products_feature->update($request->validated());
        return $this->SuccessResponse('آیتم مورد نظر با موفقیت ویرایش شد.');
    }

    public function destroy(ProductFeature $products_feature)
    {
        $products_feature->delete();
        return $this->SuccessResponse('آیتم مورد نظر با موفقیت حذف شد.');
    }
}
