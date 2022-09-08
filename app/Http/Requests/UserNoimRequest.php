<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserNoimRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'person.*.preferred_name' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'person.*.preferred_name.required' => 'Preferred name is required.',
        ];
    }
}
