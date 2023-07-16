<?php

namespace Modules\Order\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OrderRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'coupon_code' => 'nullable|exists:coupons,code',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'address' => 'required',
            'postal_code' => 'required|max:11',
            'phone' => [
                'required',
                'min:11',
                'max:11',
                'regex:/(^\+?(09|98|0)?(9([0-9]{9}))$)/',
            ],
        ];
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
