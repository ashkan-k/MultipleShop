<?php

namespace Modules\Cart\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Cart\Entities\Cart;
use Modules\Cart\Http\Requests\CartRequest;
use Modules\Product\Entities\Product;
use Modules\User\Entities\User;

class CartController extends Controller
{
    use Responses;

    public function index()
    {
        $objects = Cart::Search(request('search'))
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

        return view('cart::dashboard.list', compact('objects', 'filter_users', 'filter_products'));
    }

    public function create()
    {
        $users = User::all();
        $products = Product::all();
        return view('cart::dashboard.form', compact('users', 'products'));
    }

    public function store(CartRequest $request)
    {
        Cart::create($request->validated());
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'carts.index');
    }

    public function edit(Cart $cart)
    {
        $users = User::all();
        $products = Product::all();
        return view('cart::dashboard.form', compact('users', 'products'))->with('object', $cart);
    }

    public function update(CartRequest $request, Cart $cart)
    {
        $cart->update($request->validated());
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'carts.index');
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'carts.index');
    }
}
