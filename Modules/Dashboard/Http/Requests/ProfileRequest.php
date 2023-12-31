<?php

namespace Modules\Dashboard\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if (request()->method() == 'POST'){
            return [
                'email' => [
                    'email',
                    'required',
                    Rule::unique('users', 'email')->ignore($this->user())
                ],
                'password' => 'nullable|confirmed',
                'username' => [
                    'nullable',
                    Rule::unique('users', 'username')->ignore($this->user())
                ],
                'avatar' => 'image|mimes:jpeg,png,bmp,jpg,gif,webp',
                'phone' => [
                    'nullable',
                    'min:11',
                    'max:11',
                    'regex:/(^\+?(09|98|0)?(9([0-9]{9}))$)/',
                    Rule::unique('users', 'phone')->ignore($this->user())
                ],
                'address' => 'required|string',
                'first_name' => 'nullable|string',
                'last_name' => 'nullable|string',
            ];
        }
        return  [];
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
