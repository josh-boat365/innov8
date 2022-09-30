<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first_name' => 'required| string',
            'last_name' => 'required| string',
            'email' => 'required| email| unique:users',
            'contact' => 'required',
            'gender' => 'required',
            'password' => 'required|string',
            'institution' => 'required| string',
            'address' => 'required',
            'level_of_experience' => 'string',
            'interests' => 'required',
            'mentee_message' => ' string',
        ];
    }
}
