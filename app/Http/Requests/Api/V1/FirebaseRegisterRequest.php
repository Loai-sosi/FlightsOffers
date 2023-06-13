<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class FirebaseRegisterRequest extends BaseFormRequest
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
            's_name' => 'required',
            's_username' => 'required|unique:t_user|max|100',
            's_email' => 'email|unique:t_user,s_email|max:255',
            's_phone' => 'required|digits_between:9,14',
            's_password' => 'required|min:6',
            's_password_confirmation' => 'required|min:6|same:s_password',
            's_firebase_token' => 'required',
        ];
    }
}
