<?php

namespace Modules\Blog\Http\Controllers;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Blog;
use Modules\Blog\Entities\BlogCategory;
use Modules\Blog\Http\Requests\BlogRequest;

class BlogController extends Controller
{
    use Responses, Uploader;

    public function index()
    {
        $objects = Blog::Search(request('search'))
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        return view('blog::dashboard.blogs.list', compact('objects'));
    }

    public function create()
    {
        $categories = BlogCategory::all();
        return view('blog::dashboard.blogs.form', compact('categories'));
    }

    public function store(BlogRequest $request)
    {
        $image = $this->UploadFile($request, 'image', 'blogs_images', $request->title);

        Blog::create(array_merge($request->validated(), ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'blogs.index');
    }

    public function edit(Blog $blog)
    {
        $categories = BlogCategory::all();
        return view('blog::dashboard.blogs.form', compact('categories'))->with('object', $blog);
    }

    public function update(BlogRequest $request, Blog $blog)
    {
        $image = $this->UploadFile($request, 'image', 'blogs_images', $blog->title, $blog->image);

        $blog->update(array_merge($request->validated(), ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'blogs.index');
    }
}
