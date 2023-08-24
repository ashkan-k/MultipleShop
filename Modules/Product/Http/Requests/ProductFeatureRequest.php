<?php

namespace Modules\Product\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Modules\Product\Entities\ProductFeature;

class ProductFeatureRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $product_feature = null;
        if ($this->request->has('id')){
            $product_feature = ProductFeature::find($this->request->get('id'));
        }

        $rules = [
            'feature_id' => [
                'exists:features,id',
//                Rule::unique('product_features', 'feature_id')->ignore($product_feature)
            ],
            'product_id' => [
                'required',
                'exists:products,id',
//                Rule::in(auth()->user()->products()->pluck('id')->toArray())
            ],
            'value' => 'required',
            'place' => 'nullable|in:up,down,both',
        ];

        if (request()->method() == 'post'){
            $rules['feature_id'] .= 'required';
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
