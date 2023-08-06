<?php

namespace Modules\Blog\Http\Requests;

use App\Enums\EnumHelpers;
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
            'title' => 'required_without:en_title',
            'en_title' => 'required_without:title',
            'slug' => [
                'nullable',
                Rule::unique('blogs', 'slug')->ignore($this->blog)
            ],
            'en_slug' => [
                'nullable',
                Rule::unique('blogs', 'en_slug')->ignore($this->blog)
            ],
            'text' => 'required',
            'en_text' => 'nullable',
            'status' => 'in:draft,publish,done',
            'image' => 'mimes:jpeg,png,bmp,jpg',
            'category_id' => 'required|exists:blog_categories,id',
            'schema_type' => 'required|in:' . implode(',', EnumHelpers::$GoogleShcemaEnum),
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
