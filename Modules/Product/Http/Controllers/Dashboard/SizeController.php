<?php

namespace Modules\Product\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Size;
use Modules\Product\Http\Requests\SizeRequest;

class SizeController extends Controller
{
    use Responses;

    public function index()
    {
        $objects = Size::Search(request('search'))
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        return view('product::dashboard.sizes.list', compact('objects'));
    }

    public function create()
    {
        return view('product::dashboard.sizes.form');
    }

    public function store(SizeRequest $request)
    {
        Size::create($request->validated());
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'sizes.index');
    }

    public function edit(Size $size)
    {
        return view('product::dashboard.sizes.form')->with('object', $size);
    }

    public function update(SizeRequest $request, Size $size)
    {
        $size->update($request->validated());
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'sizes.index');
    }

    public function destroy(Size $size)
    {
        $size->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'sizes.index');
    }
}
