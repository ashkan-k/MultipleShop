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
//        dd($product_feature);
        return [
            'feature_id' => [
                'required',
                'exists:features,id',
                Rule::unique('product_features', 'feature_id')->ignore($product_feature)
            ],
            'product_id' => [
                'required',
                'exists:products,id',
                Rule::unique('product_features', 'product_id')->ignore($product_feature)
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
