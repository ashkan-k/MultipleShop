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
        return [
            'feature_id' => [
                'required',
                'exists:features,id',
                Rule::unique('product_features', 'feature_id')->ignore($product_feature)
            ],
            'product_id' => [
                'required',
                'exists:products,id',
//                Rule::in(auth()->user()->products()->pluck('id')->toArray())
            ],
            'value' => 'required|string',
            'place' => 'nullable|in:up,down,both',
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
