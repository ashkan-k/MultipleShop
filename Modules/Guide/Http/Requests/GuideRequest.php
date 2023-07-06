<?php

namespace Modules\Guide\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuideRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules =  [
            'title' => 'required|string',
            'image' => 'image|mimes:jpeg,png,bmp,jpg,svg',
        ];

        if (request()->method() == 'POST'){
            $rules['image'] .= '|required';
        }

        return $rules;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
