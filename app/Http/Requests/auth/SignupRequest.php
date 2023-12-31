<?php

namespace App\Http\Requests\auth;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
            'name' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|min:11|max:11|unique:users,phone',
            'password' => 'required|min:6|max:20',
        ];
    }
}
