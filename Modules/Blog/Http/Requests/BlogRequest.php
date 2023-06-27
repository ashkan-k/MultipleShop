<?php

namespace Modules\Blog\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BlogRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'title' => 'string|required_without:en_title',
            'en_title' => 'string|required_without:title',
            'slug' => [
                'nullable',
                Rule::unique('blogs', 'slug')->ignore($this->blog)
            ],
            'en_slug' => [
                'nullable',
                Rule::unique('blogs', 'en_slug')->ignore($this->blog)
            ],
            'text' => 'required',
            'status' => 'in:draft,publish,done',
            'image' => 'mimes:jpeg,png,bmp,jpg',
            'category_id' => 'required|exists:categories,id',
        ];

        if (request()->method == 'POST'){
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
