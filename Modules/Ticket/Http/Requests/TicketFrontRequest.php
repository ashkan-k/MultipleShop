<?php

namespace Modules\Ticket\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Auth\Rules\ReCaptcha;

class TicketFrontRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required:max:255',
            'text' => 'required',
            'ticket_category_id' => 'required|exists:ticket_categories,id',
            'file' => 'nullable|mimes:jpeg,png,bmp,jpg,gif,webp,txt,pdf',
            'recaptcha_token' => ['required', new Recaptcha()]
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
