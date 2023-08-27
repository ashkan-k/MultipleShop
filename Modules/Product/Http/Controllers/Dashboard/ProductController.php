<?php

namespace Modules\Product\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;
use Modules\Product\Entities\Brand;
use Modules\Product\Entities\Category;
use Modules\Product\Entities\Color;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\ProductFeature;
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
        foreach (Category::all()->pluck('title', 'id') as $key => $item) {
            $filter_categories[] = [$key, $item];
        }
        $filter_users = [];
        foreach (User::all() as $item) {
            $filter_users[] = [$item->id, $item->full_name()];
        }
        $status_filters = [['1', 'فعال'], ['0', 'غیر فعال']];

        return view('product::dashboard.products.list', compact('objects', 'filter_categories', 'filter_users', 'status_filters'));
    }

    public function create()
    {
        $users = User::all();
        $categories = Category::with('children')->whereNull('parent_id')->orderBy('title')->get();
        $brands = Brand::all();
        $colors = Color::all();
        $sizes = Size::all();
        return view('product::dashboard.products.form', compact('users', 'categories', 'brands', 'colors', 'sizes'));
    }

    public function store(ProductRequest $request)
    {
        $image = $this->UploadFile($request, 'image', 'product_images', $request->title);

        $product = Product::create(array_merge($request->validated(), ['image' => $image]));

        // Attach all category features for our product for initialization
        $category_features = $product->category->features()->pluck('id')->map(function ($feature_id) {
            return ['feature_id' => $feature_id, 'place' => 'down'];
        });
        $product->features()->attach($category_features);

        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'products.edit', [], $product->id);
    }

    public function edit(Product $product)
    {
        $users = User::all();
        $categories = Category::with('children')->whereNull('parent_id')->orderBy('title')->get();
        $brands = Brand::all();
        $colors = Color::all();
        $sizes = Size::all();

        $features = $product->category->features()->get(['id', 'title', 'filter_type', 'is_use_cart'])->toArray();

        return view('product::dashboard.products.form', compact('users', 'categories', 'brands', 'colors', 'sizes', 'features'))->with('object', $product);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $image = $this->UploadFile($request, 'image', 'product_images', $product->title, $product->image);

        if ($image != $product->image) {
            $this->DeleteFile($product->image);
        }

        $data = $request->validated();

        $data['is_active'] = $request->has('is_active') ?? false;
        $data['is_special'] = $request->has('is_special') ?? false;
        $data['is_virtual'] = $request->has('is_virtual') ?? false;

        $product->update(array_merge($data, ['image' => $image]));

        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'products.edit', [], $product->id);
    }

    public function destroy(Product $product)
    {
        foreach ($product->galleries as $gallery) {
            $this->DeleteFile($gallery->image);
        }
        $product->delete();
        $this->DeleteFile($product->image);
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'products.index');
    }

    public function duplicate(Product $product)
    {
        $new_product = $product->replicate();
        $new_product->is_active = 0;
        $new_product->save();

        // Duplicate the associated files
        $originalCoverPath = public_path($product->image);
        $new_object_name = 'new_' . $new_product->id . '_' . basename($originalCoverPath);
        $new_object_path = str_replace(basename($originalCoverPath), $new_object_name, $product->image);

        $newCoverPath = dirname($originalCoverPath) . '/' . $new_object_name;
        File::copy($originalCoverPath, $newCoverPath);

        $new_product->image = $new_object_path;


        // Duplicate Relations
        foreach ($product->galleries as $relatedModel) {
            $newRelatedModel = $relatedModel->replicate();

            // Duplicate the associated files
            $originalGalleryPath = public_path($relatedModel->image);
            $new_object_name = 'new_' . $new_product->id . '_' . basename($originalGalleryPath);
            $new_object_path = str_replace(basename($originalGalleryPath), $new_object_name, $relatedModel->image);

            $newGalleryPath = dirname($originalGalleryPath) . '/' . $new_object_name;
            File::copy($originalGalleryPath, $newGalleryPath);

            $newRelatedModel->image = $new_object_path;

            $new_product->galleries()->save($newRelatedModel);
        }

        foreach ($product->product_features as $relatedModel) {
            $newRelatedModel = $relatedModel->replicate();
            $newRelatedModel->product_id = $new_product->id;
            $newRelatedModel->save();
        }

        $new_product->save();

        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت کپی گرفته و ذخیره شد.', 'products.edit', [], $new_product->id);
    }
}
