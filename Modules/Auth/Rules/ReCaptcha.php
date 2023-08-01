<?php

namespace Modules\Auth\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;

class ReCaptcha implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {

    }
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        try {
            $response = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify", [
                'secret' => env('GOOGLE_RECAPTCHA_SECRET'),
                'response' => $value,
                'ip' => request()->ip(),
            ]);
        }catch (\Exception $exception){
            throw ValidationException::withMessages([$attribute => __('Internet error! Please try again.')])->status(400);
        }

        if ($response->successful() && $response->json('success')) {
            return true;
        }

        return false;
    }
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('The google recaptcha is required.');
    }
}
