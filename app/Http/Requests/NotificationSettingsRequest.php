<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotificationSettingsRequest extends FormRequest
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
            'b_enable_notification' => 'boolean|nullable',
            'b_enable_complete_voice'  => 'boolean|nullable',
            'b_enable_reminder'  => 'boolean|nullable',
            'b_enable_comments'  => 'boolean|nullable',

        ];
    }

}
