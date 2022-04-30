<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangephotoRequest extends FormRequest
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
            'fileup' => 'required|image|mimes:jpg,jpeg,png|max:6048',
        ];
    }

    public function messages()
    {
        return [
            'fileup.required' => 'You must upload a photo.',
            'fileup.image' => 'The Photo is not an Image.',
            'fileup.max' => 'The Photo is greater than 6MB.. Please choose a photo of a smaller size.',
        ];
    }
}
