<?php

namespace App\Http\Requests;

use App\Http\Requests\BaseFormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class StoreInterestRequest extends BaseFormRequest
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
        $rules =  [
            's_image' => 'mimes:jpeg,jpg,png,svg',

        ];

        $rules['localizable.' . config('app.default_language') . '.' . 's_title'] = 'required';

        return $rules;
    }

    public function messages()
    {
        return[
            's_avatar.mimes' => __('site.avatar_mimes'),
            's_name.required' => __('site.name_req'),
            's_title.required' => __('site.name_req'),
            's_comment.required' => __('site.comment_req'),
            's_email.required' => __('site.email_req'),
            's_email.email' => __('site.email_email'),
            's_name.max' => __('site.name_max_80'),
        ];
    }
}
