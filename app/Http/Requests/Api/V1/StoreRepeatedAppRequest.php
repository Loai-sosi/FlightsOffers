<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Validation\Rule;

class StoreRepeatedAppRequest extends BaseFormRequest
{


    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'app_oid' => 'required',
            'applicant_name' => 'required|string|max:300',
            'id_num' => 'nullable|max:9', // applicant ID
            'applicant_mobile' => 'required|string|max:20',
            'account_num' => 'nullable|max:10',
        ];
    }
}
