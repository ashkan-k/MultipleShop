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

    public function index(Product $product)
    {
        return view('product::dashboard.gallery.list', compact('product'));
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
