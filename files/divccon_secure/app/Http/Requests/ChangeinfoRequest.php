<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangeinfoRequest extends FormRequest
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
            'title' => 'required|min:2|max:25',
            'firstname' => 'required|min:2|max:25',
            'lastname' => 'required|min:2|max:25',
            'phone' => 'required|min:8|max:20',
            'email' => 'required|email|min:2|max:40',
            'sex' => 'required',
            'anglican' => 'required',
            'location' => 'required',
            'province' => 'required',
            'diocese' => 'required',
            'designation' => 'required',
            'church' => 'required',
      ];
    }

    public function messages()
    {
        return [
            'firstname.required' => 'Your FIRSTNAME is required.',
            'lastname.required' => 'Your LASTNAME is required.',
            'title.max' => 'Please try to shorten your TITLE.',
            'title.required' => 'Your TITLE is required.',
            'phone.required' => 'Your PHONE is required.',
            'email.required' => 'Your EMAIL is required.',
            'sex.required' => 'Your SEX is required.',
            'province.required' => 'Your PROVINCE is required.',
            'diocese.required' => 'Your DIOCESE is required.',
            'designation.required' => 'Your DESIGNATION is required.',
            'church.required' => 'Your CHURCH is required.',
        ];
    }
}
