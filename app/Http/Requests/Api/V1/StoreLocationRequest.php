<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Validation\Rule;

class StoreLocationRequest extends BaseFormRequest
{


    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'lat' => 'required|unique:locations,lat',
            'lon' => 'required|unique:locations,lon',
        ];
    }
}
