<?php

namespace Modules\Blog\Http\Controllers;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\BlogCategory;
use Modules\Blog\Http\Requests\BlogCategoryRequest;

class BlogCategoryController extends Controller
{
    use Responses, Uploader;

    public function index()
    {
        $objects = BlogCategory::Search(request('search'))
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        return view('blog::dashboard.blog-categories.list', compact('objects'));
    }

    public function create()
    {
        return view('blog::dashboard.blog-categories.form');
    }

    public function store(BlogCategoryRequest $request)
    {
        $image = $this->UploadFile($request, 'image', 'blog_category_images', $request->title);

        BlogCategory::create(array_merge($request->all(), ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'blog.categories.index');
    }

    public function edit(BlogCategory $category)
    {
        return view('blog::dashboard.blog-categories.form')->with('object', $category);
    }

    public function update(BlogCategoryRequest $request, BlogCategory $category)
    {
        $image = $this->UploadFile($request, 'image', 'blog_category_images', $category->title, $category->image);

        $category->update(array_merge($request->all(), ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'blog.categories.index');
    }

    public function destroy(BlogCategory $category)
    {
        $category->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'blog.categories.index');
    }
}
