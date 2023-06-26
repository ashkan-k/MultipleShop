<?php

namespace Modules\Product\Http\Controllers\Dashboard\Api;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Product;

class ApiGalleryController extends Controller
{
    use Responses, Uploader;

    public function list(Product $product)
    {
        $gallery = $product->galleries()->get();
        return $this->SuccessResponse($gallery);
    }

    public function store()
    {

    }
}
