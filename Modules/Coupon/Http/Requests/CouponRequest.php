<?php

namespace Modules\Coupon\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CouponRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'code' => [
                'required',
                Rule::unique('coupons', 'code')->ignore($this->coupon)
            ],
            'percent' => 'required|numeric',
            'uses_number' => 'numeric',
            'expiration' => 'nullable|jdate:Y-m-d|after:' . \verta()->formatDate(),
            'user_id' => 'nullable|exists:users,id',
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
