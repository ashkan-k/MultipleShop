<?php

namespace Modules\Product\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Category;
use Modules\Product\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    use Responses, Uploader;

    public function index()
    {
        $objects = Category::Search(request('search'))
            ->Filter(\request())
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        $filter_categories = [];
        foreach (Category::all()->pluck('title', 'id') as $key => $item){
            $filter_categories[] = [$key, $item];
        }

        return view('product::dashboard.categories.list', compact('objects', 'filter_categories'));
    }

    public function create()
    {
        $parents = Category::all();
        return view('product::dashboard.categories.form', compact('parents'));
    }

    public function store(CategoryRequest $request)
    {
        $image = $this->UploadFile($request, 'image', 'product_category_images', $request->title);

        Category::create(array_merge($request->all(), ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'categories.index');
    }

    public function edit(Category $category)
    {
        $parents = Category::whereNot('id', $category->id)->get();
        return view('product::dashboard.categories.form', compact('parents'))->with('object', $category);
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $image = $this->UploadFile($request, 'image', 'product_category_images', $category->title, $category->image);

        if ($request->is_delete_image){
            $image = null;
        }

        $category->update(array_merge($request->all(), ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'categories.index');
    }
}
