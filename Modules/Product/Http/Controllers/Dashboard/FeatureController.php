<?php

namespace Modules\Product\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Feature;
use Modules\Product\Entities\Product;
use Modules\Product\Http\Requests\FeatureRequest;

class FeatureController extends Controller
{
    use Responses;

    public function index()
    {
        $objects = Feature::Search(request('search'))
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        return view('product::dashboard.features.list', compact('objects'));
    }

    public function create()
    {
        return view('product::dashboard.features.form');
    }

    public function store(FeatureRequest $request)
    {
        Feature::create($request->validated());
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'features.index');
    }

    public function edit(Feature $feature)
    {
        return view('product::dashboard.features.form')->with('object', $feature);
    }

    public function update(FeatureRequest $request, Feature $feature)
    {
        $feature->update($request->validated());
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'features.index');
    }

    public function destroy(Feature $feature)
    {
        $feature->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'features.index');
    }
}
