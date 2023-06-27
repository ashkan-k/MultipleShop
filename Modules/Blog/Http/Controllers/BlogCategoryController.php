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

        return view('product::dashboard.blog-categories.list', compact('objects'));
    }

    public function create()
    {
        return view('product::dashboard.blog-categories.form');
    }

    public function store(BlogCategoryRequest $request)
    {
        $image = $this->UploadFile($request, 'image', 'blog_category_images', $request->title);

        BlogCategory::create(array_merge($request->all(), ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'blog-categories.index');
    }

    public function edit(BlogCategory $blogCategory)
    {
        return view('product::dashboard.blog-categories.form')->with('object', $blogCategory);
    }

    public function update(BlogCategoryRequest $request, BlogCategory $blogCategory)
    {
        $image = $this->UploadFile($request, 'image', 'blog_category_images', $blogCategory->title, $blogCategory->image);

        $blogCategory->update(array_merge($request->all(), ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'blog-categories.index');
    }

    public function destroy(BlogCategory $blogCategory)
    {
        $blogCategory->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'blog-categories.index');
    }
}
