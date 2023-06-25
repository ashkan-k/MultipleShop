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
        return [
           'title' => 'required|string',
           'description' => 'required',
           'price' => 'required|numeric',
           'discount_price' => 'required|numeric',
            'discount_start_date' => 'required|jdate:Y-m-d|after:' . \verta()->formatDate(),
            'discount_end_date' => 'required|jdate:Y-m-d|after:discount_start_date',
            'image' => 'required|image|mimes:jpeg,png,bmp,jpg',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'is_active' => 'boolean',
            'is_special' => 'boolean',
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
