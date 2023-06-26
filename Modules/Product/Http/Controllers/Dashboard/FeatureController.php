<?php

namespace Modules\Product\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Category;
use Modules\Product\Entities\Feature;
use Modules\Product\Entities\Product;
use Modules\Product\Http\Requests\FeatureRequest;

class FeatureController extends Controller
{
    use Responses;

    // Web Routes
    public function index()
    {
        $category = Category::findOrFail(\request('category'));
        $objects = $category->features()->Search(request('search'))
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        return view('product::dashboard.features.list', compact('objects', 'category'));
    }

    public function destroy(Feature $feature)
    {
        $feature->delete();
        $next_url = \request('next_url');
        return $this->SuccessRedirectUrl('آیتم مورد نظر با موفقیت حذف شد.', $next_url);
    }
    //

    // Web Apis Routes
    public function store(FeatureRequest $request)
    {
        Feature::create($request->validated());
        return $this->SuccessResponse('آیتم مورد نظر با موفقیت ثبت شد.');
    }

    public function update(FeatureRequest $request, Feature $feature)
    {
        $feature->update($request->validated());
        return $this->SuccessResponse('آیتم مورد نظر با موفقیت ویرایش شد.');
    }

    public function feature_filter_items(Feature $feature)
    {
        $items = explode('،', $feature->filter_items);
        return $this->SuccessResponse($items);
    }
    //
}
