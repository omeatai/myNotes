<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest2 extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'location' => 'required',
            'anglican' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'location.required' => 'Please choose an option for where you are based!',
            'anglican.required' => 'Please choose an option for whether you are an Anglican!',
        ];
    }
}
