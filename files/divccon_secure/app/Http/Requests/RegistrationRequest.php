<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'pin' => 'required|min:6|max:6|exists:pins|unique:registrations,pin,NULL,id,status,1',
            'firstname' => 'required|min:2|max:25',
            'lastname' => 'required|min:2|max:25',
            'title' => 'required|min:2|max:20',
            'phone' => 'required|min:8|max:20',
            'email' => 'required|email|same:confirmemail|min:7|max:50',
            'confirmemail' => 'required|email|min:7|max:50',
            'sex' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'pin.required' => 'Your PIN is required.',
            'pin.max' => 'Please use only 6 digits for PIN.',
            'pin.min' => 'Please use only 6 digits for PIN.',
            'pin.exists' => 'Sorry, this PIN is not valid! Try Again.',
            'pin.unique' => 'Sorry, this PIN has already been used to register. Try using it to login to Membership Panel.',
            'firstname.required' => 'Your FIRSTNAME is required.',
            'lastname.required' => 'Your LASTNAME is required.',
        ];
    }
}
