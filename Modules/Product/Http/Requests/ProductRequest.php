<?php

namespace Modules\Product\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
           'description' => 'required',
           'price' => 'required|numeric',
           'discount_price' => 'nullable|numeric',
            'discount_start_date' => 'nullable|jdate:Y-m-d|after:' . \verta()->formatDate(),
            'discount_end_date' => 'nullable|jdate:Y-m-d|after:discount_start_date',
            'image' => 'image|mimes:jpeg,png,bmp,jpg',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'is_active' => 'boolean',
            'is_special' => 'boolean',
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
