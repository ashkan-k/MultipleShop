<?php

namespace Modules\Product\Http\Controllers\Dashboard\Api;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Gallery;
use Modules\Product\Entities\Product;
use Modules\Product\Http\Requests\GalleryRequest;
use Modules\Product\Http\Requests\ProductRequest;

class ApiProductController extends Controller
{
    use Responses, Uploader;

    private $relations = ['user', 'category'];

    public function list()
    {
        $objects = Product::ActiveProducts()->with($this->relations)
            ->Search(request('search'))
            ->Filter(\request())
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        return $this->SuccessResponse($objects);
    }
}
