<?php

namespace App\Http\Requests;

use App\Http\Requests\BaseFormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class ApplyRequest extends BaseFormRequest
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
            's_avatar' => 'required|mimes:jpeg,jpg,png,svg',
            'dt_dob_date' => 'required|date',
            'e_gender' => 'required',
            'e_social_state' => 'required',
            's_certification' => 'required|mimes:pdf,docx,jpeg,jpg,png,svg',
            's_cv' => 'required|mimes:pdf,docx,jpeg,jpg,png,svg|max:10000',
            's_address' => 'required|max:80',
            's_qualifications' => 'required|max:200',
            's_name' => 'required|max:80',
            's_email' => 'required|email',
            's_mobile' => 'required|regex:/(05)[0-9]{8}/', // (05,**8)
        ];
    }

    public function messages()
    {
        return[
            's_avatar.required' => __('site.avatar_req'),
            's_avatar.mimes' => __('site.avatar_mimes'),
            'dt_dob_date.required' => __('site.dt_dob_date_req'),
            'dt_dob_date.date' => __('site.dt_dob_date_date'),
            'e_gender.required' => __('site.e_gender_req'),
            'e_social_state.required' => __('site.e_social_state_req'),
            's_certification.required' => __('site.s_certification_req'),
            's_certification.mimes' => __('site.s_certification_mimes'),
            's_cv.mimes' => __('site.s_cv_mimes'),
            's_cv.required' => __('site.s_cv_req'),
            's_address.required' => __('site.s_address_req'),
            's_address.max' => __('site.s_address_max_80'),
            's_qualifications.max' => __('site.s_qualifications_max_200'),
            's_qualifications.required' => __('site.s_qualifications_req'),
            's_name.required' => __('site.name_req'),
            's_email.required' => __('site.email_req'),
            's_mobile.required' => __('site.mobile_req'),
            's_content.required' => __('site.content_req'),
            's_mobile.regex' => __('site.mobile_mobile'),
            's_email.email' => __('site.email_email'),
            's_name.max' => __('site.name_max_80'),
        ];
    }
}
