<?php

namespace Modules\Product\Http\Controllers\Dashboard;

use App\Http\Traits\Helpers;
use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Category;
use Modules\Product\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    use Responses, Uploader, Helpers;

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

        $filter_types = [
            ['1', 'ویژه'],
            ['0', 'معمولی']
        ];

        return view('product::dashboard.categories.list', compact('objects', 'filter_categories', 'filter_types'));
    }

    public function create()
    {
        $parents = Category::all();
        $icons = Category::GetFontAwesomeIcons();

        return view('product::dashboard.categories.form', compact('parents', 'icons'));
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
        $icons = Category::GetFontAwesomeIcons();

        return view('product::dashboard.categories.form', compact('parents', 'icons'))->with('object', $category);
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $image = $this->UploadFile($request, 'image', 'product_category_images', $category->title, $category->image);

        if ($request->is_delete_image){
            $this->DeleteFile($image);
            $image = null;
        }

        if ($image != $category->image){
            $this->DeleteFile($category->image);
        }

        $data = $request->validated();

        $data['is_special'] = $request->has('is_special') ?? false;
        $data['is_best'] = $request->has('is_best') ?? false;

        $category->update(array_merge($data, ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        $this->DeleteFile($category->image);
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'categories.index');
    }
}
