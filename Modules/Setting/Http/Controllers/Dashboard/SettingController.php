<?php

namespace Modules\Setting\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Setting\Entities\Setting;
use Modules\Setting\Http\Requests\SettingRequest;

class SettingController extends Controller
{
    use Responses;

    public function index()
    {
        $objects = Setting::Search(request('search'))->paginate(env('PAGINATION_NUMBER', 10));
        return view('setting::dashboard.list', compact('objects'));
    }

    public function create()
    {
        return view('dashboard.settings.form');
    }

    public function store(SettingRequest $request)
    {
        Setting::create($request->all());
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'settings.index');
    }

    public function edit(Setting $setting)
    {
        return view('dashboard.settings.form', compact('setting'));
    }

    public function update(SettingRequest $request, Setting $setting)
    {
        $setting->update($request->all());
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'settings.index');
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'settings.index');
    }
}
