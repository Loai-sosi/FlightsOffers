<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Validation\Rule;

class StoreInquiryRequest extends BaseFormRequest
{


    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'applicant_name' => 'required|string|max:250',
            'applicant_mobile' => 'required|string|max:20',
            'type_id' => 'nullable',
            'status' => 'required',
            'description' => 'nullable',
        ];
    }
}
