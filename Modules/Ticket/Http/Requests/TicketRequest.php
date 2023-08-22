<?php

namespace Modules\Ticket\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
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
            'user_id' => 'nullable|exists:users,id',
            'file' => 'nullable|mimes:jpeg,png,bmp,jpg,gif,webp,txt,pdf',
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
