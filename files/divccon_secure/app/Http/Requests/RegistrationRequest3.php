<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest3 extends FormRequest
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
            'province' => 'required',
            'diocese' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'province.required' => 'Please choose an option for Province!',
            'diocese.required' => 'Please choose an option for Diocese!',
        ];
    }
}
