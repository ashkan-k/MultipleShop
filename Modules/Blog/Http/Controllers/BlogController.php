<?php

namespace Modules\Blog\Http\Controllers;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Blog;
use Modules\Blog\Http\Requests\BlogRequest;

class BlogController extends Controller
{
    use Responses, Uploader;

    public function index()
    {
        return view('blog::dashboard.blogs.list');
    }

    public function create()
    {
        return view('blog::dashboard.blogs.form');
    }

    public function store(BlogRequest $request)
    {
        $image = $this->UploadFile($request, 'image', 'blogs_images', $request->title);

        Blog::create(array_merge($request->validated(), ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'blogs.index');
    }

    public function edit(Blog $blog)
    {
        return view('blog::dashboard.blogs.form', compact('blog'));
    }

    public function update(BlogRequest $request, Blog $blog)
    {
        $image = $this->UploadFile($request, 'image', 'blogs_images', $blog->title, $blog->image);

        $blog->update(array_merge($request->validated(), ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'blogs.index');
    }
}
