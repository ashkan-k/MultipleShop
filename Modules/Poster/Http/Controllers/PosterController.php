<?php

namespace Modules\Poster\Http\Controllers;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Poster\Entities\Poster;
use Modules\Poster\Http\Requests\PosterRequest;

class PosterController extends Controller
{
    use Responses, Uploader;

    public function index()
    {
        $objects = Poster::Search(request('search'))
//            ->Filter(\request())
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

//        $filter_posters = [];
//        foreach (Poster::all()->pluck('title', 'id') as $key => $item){
//            $filter_posters[] = [$key, $item];
//        }

        return view('poster::dashboard.list', compact('objects'));
    }

    public function create()
    {
        $parents = Poster::all();
        return view('poster::dashboard.form', compact('parents'));
    }

    public function store(PosterRequest $request)
    {
        $image = $this->UploadFile($request, 'image', 'poster_images', $request->title);

        Poster::create(array_merge($request->validated(), ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'posters.index');
    }

    public function edit(Poster $poster)
    {
        return view('poster::dashboard.form')->with('object', $poster);
    }

    public function update(PosterRequest $request, Poster $poster)
    {
        $image = $this->UploadFile($request, 'image', 'poster_images', $poster->title, $poster->image);

        $poster->update(array_merge($request->validated(), ['image' => $image]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'posters.index');
    }

    public function destroy(Poster $poster)
    {
        $poster->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'posters.index');
    }
}
