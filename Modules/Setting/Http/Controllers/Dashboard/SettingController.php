<?php

namespace Modules\Setting\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\PageBuilder\Entities\PageBuilder;
use Modules\Setting\Entities\Setting;
use Modules\Setting\Helpers\SettingHelpers;
use Modules\Setting\Http\Requests\SettingRequest;

class SettingController extends Controller
{
    use Responses;

    public function index()
    {
        $objects = Setting::Search(request('search'))
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));
        return view('setting::dashboard.list', compact('objects'));
    }

    public function create()
    {
        return view('setting::dashboard.form');
    }

    public function store(SettingRequest $request)
    {
        $data = $request->validated();
        $data['is_active'] = $request->has('is_active') ?? false;
        $setting = Setting::create($data);

        $next_url = route('settings.index');
        if (\request('next')) {
            $next_url = \request('next') . '/' . $setting->id;
        }
        return $this->SuccessRedirectUrl('آیتم مورد نظر با موفقیت ثبت شد.', $next_url);
    }

    public function edit(Setting $setting)
    {
        return view('setting::dashboard.form')->with('object', $setting);
    }

    public function update(SettingRequest $request, Setting $setting)
    {
        $data = $request->validated();
        $data['is_active'] = $request->has('is_active') ?? false;
        $setting->update($data);

        $next_url = route('settings.index');
        if (\request('next')) {
            $next_url = \request('next');
        }
        return $this->SuccessRedirectUrl('آیتم مورد نظر با موفقیت ویرایش شد.', $next_url);
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'settings.index');
    }

    public function change_status(Setting $setting)
    {
        $setting->update(['is_active' => \request('is_active')]);
        return $this->SuccessResponse('وضعیت آیتم مورد نظر با موفقیت تغییر یافت.');
    }

    //

    public function dynamic_form($key)
    {
        $select_options = [];
        if ($key == 'comment_terms_page') {
            $select_options = PageBuilder::all()->pluck('title', 'slug')->toArray();
        }
        $form = SettingHelpers::GetDynamicItem($key, $select_options);
        $setting = Setting::firstOrCreate(['key' => $form['key']], [
            'key' => $form['key'],
            'is_active' => true,
        ]);
        return view('setting::dashboard.dynamic_form', compact('form'))->with('object', $setting);
    }

    public function multiple_dynamic_form($key)
    {
        $select_options = [];
        if ($key == 'comment_terms_page') {
            $select_options = PageBuilder::all()->pluck('title', 'slug')->toArray();
        }
        $forms = SettingHelpers::GetDynamicItem($key, $select_options);
        foreach ($forms as $item){
            $item['object'] = Setting::firstOrCreate(['key' => $item['key']], [
                'key' => $item['key'],
                'is_active' => true,
            ]);
        }

        return view('setting::dashboard.dynamic_form', compact('forms'));
    }
}
