<?php

namespace Modules\Product\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Gallery;
use Modules\Product\Entities\Product;
use Modules\Product\Http\Requests\GalleryRequest;

class GalleryController extends Controller
{
    use Responses, Uploader;

    public function index()
    {
        $objects = Gallery::Search(request('search'))
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        return view('product::dashboard.galleries.list', compact('objects'));
    }

    public function store(GalleryRequest $request)
    {
        $product = Product::findOrFail($request->product_id);
        $image = $this->UploadFile($request, 'image', 'product_galleries', $product->title);

        Gallery::create(array_merge($request->validated(), ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'galleries.index');
    }

    public function destroy(Gallery $product)
    {
        $product->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'galleries.index');
    }
}
