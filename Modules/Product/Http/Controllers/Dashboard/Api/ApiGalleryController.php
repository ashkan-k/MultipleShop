<?php

namespace Modules\Product\Http\Controllers\Dashboard\Api;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Product;
use Modules\Product\Http\Requests\GalleryRequest;
use Modules\Product\Http\Requests\ProductRequest;

class ApiGalleryController extends Controller
{
    use Responses, Uploader;

    public function list(Product $product)
    {
        $gallery = $product->galleries()->get();
        return $this->SuccessResponse($gallery);
    }

    public function store(Product $product, GalleryRequest $request)
    {
        $product->galleries()->create($request->validated());
        return $this->SuccessResponse('تصویر مورد نظر با موفقیت آپلود شد.');
    }
}
