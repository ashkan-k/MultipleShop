<?php

namespace Modules\Product\Http\Controllers\Dashboard\Api;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Category;
use Modules\Product\Entities\Gallery;
use Modules\Product\Entities\Product;
use Modules\Product\Http\Requests\GalleryRequest;
use Modules\Product\Http\Requests\ProductRequest;

class ApiCategoryController extends Controller
{
    use Responses, Uploader;

    public function list()
    {
        $order_by_field = app()->getLocale() == 'fa' ? 'title' : 'en_title';
        $objects = Category::Search(request('search'))
            ->Filter(\request())->orderBy($order_by_field)->latest()->get();

        return $this->SuccessResponse($objects);
    }
}
