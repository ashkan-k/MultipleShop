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
//            ->Filter(\request())
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));
        $status_filters = [['1', 'فعال'], ['0', 'غیرفعال']];

        return view('product::dashboard.categories.list', compact('objects', 'status_filters'));
    }

    public function create()
    {
        return view('product::dashboard.categories.form');
    }

    public function store(CategoryRequest $request)
    {
        $image = $this->UploadFile($request, 'image', 'category_images', $request->title);

        Category::create(array_merge($request->all(), ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'categories.index');
    }

    public function edit(Category $category)
    {
        return view('product::dashboard.categories.form', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $image = $this->UploadFile($request, 'image', 'category_images', $category->title, $category->image);

        $category->update(array_merge($request->all(), ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'categories.index');
    }
}
