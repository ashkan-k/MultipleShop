<?php

namespace Modules\Wishlist\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Product;
use Modules\User\Entities\User;
use Modules\Wishlist\Entities\Wishlist;
use Modules\Wishlist\Http\Requests\WishlistRequest;

class WishlistController extends Controller
{
    use Responses;

    public function index()
    {
        $objects = Wishlist::Search(request('search'))
            ->Filter(\request())
            ->with(['user', 'product'])
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        $filter_users = [];
        foreach (User::all() as $item){
            $filter_users[] = [$item->id, $item->full_name()];
        }
        $filter_products = [];
        foreach (Product::all()->pluck('title', 'id') as $key => $item){
            $filter_products[] = [$key, $item];
        }

        return view('wishlist::dashboard.list', compact('objects', 'filter_users', 'filter_products'));
    }

    public function create()
    {
        $users = User::all();
        $products = Product::all();
        return view('wishlist::dashboard.form', compact('users', 'products'));
    }

    public function store(WishlistRequest $request)
    {
        Wishlist::create($request->validated());
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'wishlists.index');
    }

    public function edit(Wishlist $wishlist)
    {
        $users = User::all();
        $products = Product::all();
        return view('wishlist::dashboard.form', compact('users', 'products'))->with('object', $wishlist);
    }

    public function update(WishlistRequest $request, Wishlist $wishlist)
    {
        $wishlist->update($request->validated());
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'wishlists.index');
    }

    public function destroy(Wishlist $wishlist)
    {
        $wishlist->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'wishlists.index');
    }
}
