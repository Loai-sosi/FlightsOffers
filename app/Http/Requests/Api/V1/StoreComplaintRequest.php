<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Validation\Rule;

class StoreComplaintRequest extends BaseFormRequest
{


    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
//            'oid' => ['nullable', Rule::exists('applications', 'oid')->whereNull('deleted')],
            'app_type_oid' => 'required',
            'sub_type_oid' => 'required',
            'street_num' => 'nullable|string|max:255',
            'build_num' => 'nullable|string|max:255',
            'app_desc' => 'nullable|string',
            'account_num' => 'nullable|max:8',
            'id_num' => 'nullable|max:9', // applicant ID
            'bill_num' => 'nullable|max:10',
            'block_num' => 'nullable|max:8',
            'parcel_num' => 'nullable|max:10',
            'applicant_name' => 'required|string|max:300',
            'mobile_num' => 'required|string|max:20',
            'app_source_oid' => 'required',
            'address_desc' => 'required|string|max:250',
            'quarter_oid' => 'nullable|max:8',
            'region_oid' => 'nullable|max:8',
            'geo_oid' => 'nullable|max:8',
            'print_date' => 'nullable',
        ];
    }
}
