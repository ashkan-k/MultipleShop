<?php

namespace Modules\Product\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FeatureRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
                Rule::unique('features', 'title')->ignore($this->feature)
            ],
            'category_id' => [
                'required',
                'exists:categories,id',
            ],
            'is_filter' => 'boolean',
            'filter_type' => 'nullable|in:checkbox,radio,text',
            'filter_items' => 'nullable|string',
//            'filter_items' => 'required_without:is_filter,true',
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
