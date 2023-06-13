<?php

namespace App\Http\Requests;

use App\Http\Requests\BaseFormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class SubscribeRequest extends BaseFormRequest
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

            's_name' => 'required|max:80',
            's_email' => 'required|email',
            's_mobile' => 'required|regex:/(05)[0-9]{8}/', // (05,**8)
            's_code' => 'required|unique:t_subscripitions,s_code',
        ];
    }

    public function messages()
    {
        return[

            's_name.required' => __('site.name_req'),
            's_email.required' => __('site.email_req'),
            's_mobile.required' => __('site.mobile_req'),
            's_code.required' => __('site.code_req'),
            's_mobile.regex' => __('site.mobile_mobile'),
            's_email.email' => __('site.email_email'),
            's_code.unique' => __('site.code_unique'),

        ];
    }
}
