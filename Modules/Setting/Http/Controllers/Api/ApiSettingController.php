<?php

namespace Modules\Setting\Http\Controllers\Api;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\PageBuilder\Entities\PageBuilder;
use Modules\Setting\Entities\Setting;
use Modules\Setting\Http\Requests\SettingRequest;

class ApiSettingController extends Controller
{
    use Responses;

    public function update(Setting $setting, SettingRequest $request)
    {
        $setting->update($request->validated());
        return $this->SuccessResponse('آیتم مورد نظر با موفقیت ذخیره شد.');
    }
}
