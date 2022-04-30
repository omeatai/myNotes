<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MembershipRequest extends FormRequest
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
            'pin' => 'required|min:6|max:6|exists:registrations',
            'lastname' => 'required|min:2|max:25',
        ];
    }

    public function messages()
    {
        return [
            'pin.required' => 'Your PIN is required.',
            'pin.max' => 'Please use only 6 digits for PIN.',
            'pin.min' => 'Please use only 6 digits for PIN.',
            'pin.exists' => 'Sorry, this PIN is not in our Database! Try Again.',
            'lastname.required' => 'Your LASTNAME is required.',
        ];
    }
}
