<?php

namespace Modules\Product\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Brand;
use Modules\Product\Entities\Category;
use Modules\Product\Entities\Color;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\Size;
use Modules\Product\Http\Requests\ProductRequest;
use Modules\User\Entities\User;

class ProductController extends Controller
{
    use Responses, Uploader;

    private $relations = ['user', 'category'];

    public function index()
    {
        $objects = Product::with($this->relations)->Search(request('search'))
            ->Filter(\request())
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        $filter_categories = [];
        foreach (Category::all()->pluck('title', 'id') as $key => $item){
            $filter_categories[] = [$key, $item];
        }
        $filter_users = [];
        foreach (User::all() as $item){
            $filter_users[] = [$item->id, $item->full_name()];
        }
        $status_filters = [['1', 'فعال'], ['0', 'غیر فعال']];

        return view('product::dashboard.products.list', compact('objects', 'filter_categories', 'filter_users', 'status_filters'));
    }

    public function create()
    {
        $users = User::all();
        $categories = Category::all();
        $brands = Brand::all();
        $colors = Color::all();
        $sizes = Size::all();
        return view('product::dashboard.products.form', compact('users', 'categories', 'brands', 'colors', 'sizes'));
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
        $brands = Brand::all();
        $colors = Color::all();
        $sizes = Size::all();
        return view('product::dashboard.products.form', compact('users', 'categories', 'brands', 'colors', 'sizes'))->with('object', $product);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $image = $this->UploadFile($request, 'image', 'product_images', $product->title, $product->image);

        $data = $request->validated();

        $data['is_active'] = $request->has('is_active') ?? false;
        $data['is_special'] = $request->has('is_special') ?? false;

        $product->update(array_merge($data, ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'products.index');
    }
}
