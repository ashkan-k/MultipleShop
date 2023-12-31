<?php

namespace Modules\Comment\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:50',
            'body' => 'required|string|max:300',
            'negative_points' => 'nullable|string|max:300',
            'positive_points' => 'nullable|string|max:300',
            'suggest_score' => 'nullable|in:suggest,not_suggest,no_idea',
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
