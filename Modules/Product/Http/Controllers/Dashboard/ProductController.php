<?php

namespace Modules\Product\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Category;
use Modules\Product\Entities\Product;
use Modules\Product\Http\Requests\ProductRequest;
use Modules\User\Entities\User;

class ProductController extends Controller
{
    use Responses, Uploader;

    public function index()
    {
        $objects = Product::Search(request('search'))
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        return view('product::dashboard.products.list', compact('objects'));
    }

    public function create()
    {
        $users = User::all();
        $categories = Category::all();
        return view('product::dashboard.products.form', compact('users', 'categories'));
    }

    public function store(ProductRequest $request)
    {
        $image = $this->UploadFile($request, 'image', 'product_images', $request->title);

        Product::create(array_merge($request->validated(), ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'products.index');
    }

    public function edit(Product $product)
    {
        $users = User::all();
        $categories = Category::all();
        return view('product::dashboard.products.form', compact('users', 'categories'))->with('object', $product);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $image = $this->UploadFile($request, 'image', 'product_images', $product->title, $product->image);

        $product->update(array_merge($request->validated(), ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'products.index');
    }
}
