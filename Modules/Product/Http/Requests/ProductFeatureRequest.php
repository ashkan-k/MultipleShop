<?php

namespace Modules\Product\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductFeatureRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'feature_id' => [
                'string',
                'required',
                'exists:features,id',
                Rule::unique('product_features', 'feature_id')->ignore($this->product_feature)
            ],
            'product_id' => [
                'string',
                'required',
                'exists:products,id',
                Rule::unique('product_features', 'product_id')->ignore($this->product_feature)
            ],
            'value' => 'required|string',
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
