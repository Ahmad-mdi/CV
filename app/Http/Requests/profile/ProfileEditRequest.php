<?php

namespace App\Http\Requests\profile;

use Illuminate\Foundation\Http\FormRequest;

class ProfileEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $user_id = auth()->user()->id;
        return [
            'name' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users,email,'.$user_id,
            'phone' => 'required|min:11|max:11|unique:users,phone,'.$user_id,
            'address' => 'min:4|max:250',
            'about' => 'min:4|max:1500',
        ];
    }
}
