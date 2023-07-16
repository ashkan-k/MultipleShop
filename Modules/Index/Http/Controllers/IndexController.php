<?php

namespace Modules\Index\Http\Controllers;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cache;
use Modules\Blog\Entities\Blog;
use Modules\Dashboard\Http\Requests\ProfileRequest;
use Modules\Poster\Entities\Poster;
use Modules\Product\Entities\Category;
use Modules\Product\Entities\Product;
use Modules\Slider\Entities\Slider;

class IndexController extends Controller
{
    use Responses, Uploader;

    public function index()
    {
        $sliders = Slider::all();

        $special_categories = Category::withCount('products')
            ->where('is_special', 1)
            ->limit(6)->get();

        $special_products = Product::ActiveProducts()->where('is_special', 1)->get();
        $latest_products = Product::ActiveProducts()->latest()->limit(10)->get();
        $most_favorite_products = Product::ActiveProducts()
            ->withCount('orders')->orderByDesc('orders_count')
            ->limit(10)->get();
        $cheapest_products = Product::ActiveProducts()
            ->orderBy('price')->limit(10)->get();

        if (!$blogs = GetCache('index_blogs')) {
            $blogs = AddCache('index_blogs', Blog::latest()->get());
        }

        $best_category = Category::where('is_best', 1)->with(['products'])->first();

        $top_posters = Poster::where('location', 'top')->get();
        $center_posters = Poster::where('location', 'center')->get();
        $bottom_posters = Poster::where('location', 'bottom')->get();

        return view('index::index', compact('sliders', 'special_categories', 'special_products', 'top_posters', 'center_posters', 'bottom_posters', 'latest_products', 'most_favorite_products', 'cheapest_products', 'blogs', 'best_category'));
    }

    public function profile()
    {
        $user = auth()->user();
        return view('index::profile', compact('user'));
    }

    public function profile_edit(ProfileRequest $request)
    {
        $user = auth()->user();

        if (\request()->method() == 'POST') {
            $avatar = $this->UploadFile($request, 'avatar', 'avatars', $user->email, $user->avatar);

            $data = $request->validated();

            $password = $data['password'];
            unset($data['password']);

            $user->update(array_merge($data, ['avatar' => $avatar]));
            if ($password) {
                $user->set_password($password);
                auth()->login($user);
            }
            return $this->SuccessRedirect(__('Your profile information has been successfully edited.'), $request->get('next', 'user_profile_edit'));

        }

        return view('index::profile_edit', compact('user'));
    }
}
