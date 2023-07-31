<?php

namespace Modules\Product\Http\Controllers\Dashboard\Api;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Gallery;
use Modules\Product\Entities\Product;
use Modules\Product\Http\Requests\GalleryRequest;
use Modules\Product\Http\Requests\ProductRequest;
use function Ramsey\Collection\offer;

class ApiProductController extends Controller
{
    use Responses, Uploader;

    private $relations = ['user', 'category'];

    public function list()
    {
        $objects = Product::ActiveProducts()->with($this->relations)
            ->Search(request('search'))
            ->Filter(\request());

        if (request('only_has_quantity_filter') == 'true'){
            $objects = $objects->where('quantity', '>', 0);
        }

        $objects = $objects->latest()->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));
        return $this->SuccessResponse($objects);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return $this->SuccessResponse(Product::find($product->id));
    }
}
