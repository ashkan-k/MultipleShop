<?php

namespace Modules\PageBuilder\Http\Requests;

use App\Enums\EnumHelpers;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PageBuilderRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'en_title' => 'required',
            'body' => 'required',
            'en_body' => 'nullable',
            'is_active' => 'nullable|boolean',
            'slug' => [
                'nullable',
                Rule::unique('page_builders', 'slug')->ignore($this->page)
            ],
            'en_slug' => [
                'nullable',
                Rule::unique('page_builders', 'en_slug')->ignore($this->page)
            ],
            'icon_name' => 'required_if:is_special,1',
            'image' => 'nullable|image|mimes:jpeg,png,bmp,jpg,gif,webp',
            'schema_type' => 'required|in:' . implode(',', EnumHelpers::$PageGoogleShcemaEnum),
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
