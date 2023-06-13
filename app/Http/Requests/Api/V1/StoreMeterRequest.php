<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Validation\Rule;

class StoreMeterRequest extends BaseFormRequest
{


    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => 'nullable|string|max:250',
            'mobile' => 'nullable|string|max:20',
            'meter' => 'required',
            'account_no' => 'required',
        ];
    }
}
