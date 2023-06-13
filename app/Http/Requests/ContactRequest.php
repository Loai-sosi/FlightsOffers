<?php

namespace App\Http\Requests;

use App\Http\Requests\BaseFormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class ContactRequest extends BaseFormRequest
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
            's_full_name' => 'required|max:150',
            's_title' => 'required|max:150',
            's_email' => 'required|email',
            's_phone' => 'required|min:10|max:16',
            's_message' => 'required',
        ];
    }

    public function messages()
    {
        return[
            's_full_name.required' => __('site.name_req'),
            's_email.required' => __('site.email_req'),
            's_phone.required' => __('site.mobile_req'),
            's_message.required' => __('site.content_req'),
            's_email.email' => __('site.email_email'),
            's_full_name.max' => __('site.name_max_80'),
        ];
    }
}
