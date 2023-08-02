<?php

namespace Modules\Setting\Http\Controllers\Api;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\PageBuilder\Entities\PageBuilder;
use Modules\Setting\Entities\Setting;
use Modules\Setting\Http\Requests\SettingRequest;

class ApiSettingController extends Controller
{
    use Responses, Uploader;

    public function update(Setting $setting, SettingRequest $request)
    {
        $data = $request->validated();
        $data['is_active'] = \request('is_active');

        $data['value'] = $this->UploadFile($request, 'value', 'settings', $setting->key, $request->value);
        
        $setting->update($data);
        return $this->SuccessResponse(Setting::find($setting->id));
    }
}
