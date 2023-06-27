<?php

namespace Modules\Product\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'string|required_without:en_title',
            'en_title' => 'string|required_without:title',
            'slug' => [
                'nullable',
                Rule::unique('categories', 'slug')->ignore($this->category)
            ],
            'en_slug' => [
                'nullable',
                Rule::unique('categories', 'en_slug')->ignore($this->category)
            ],
            'image' => 'mimes:jpeg,png,bmp,jpg',
            'parent_id' => 'nullable|exists:categories,id',
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
