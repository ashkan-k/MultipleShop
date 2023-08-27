<?php

namespace Modules\Product\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'title' => 'required_without:en_title',
            'en_title' => 'required_without:title',
            'slug' => [
                'nullable',
                Rule::unique('categories', 'slug')->ignore($this->category)
            ],
            'en_slug' => [
                'nullable',
                Rule::unique('categories', 'en_slug')->ignore($this->category)
            ],
           'description' => 'required',
           'en_description' => 'nullable',
           'price' => 'required|numeric',
           'quantity' => 'required|numeric|min:0',
           'discount_price' => 'nullable|numeric',
            'discount_start_date' => 'nullable|jdate:Y-m-d|after:' . \verta()->subDay(),
            'discount_end_date' => 'nullable|jdate:Y-m-d|after:' . \verta()->subDay(),
            'image' => 'image|mimes:jpeg,png,bmp,jpg,gif,webp',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'color_id.*' => 'numeric|exists:colors,id',
            'size_id.*' => 'numeric|exists:sizes,id',
            'brand_id' => 'nullable|exists:brands,id',
            'is_active' => 'boolean',
            'is_special' => 'boolean',
            'is_virtual' => 'boolean',
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
