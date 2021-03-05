<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PollRequest extends FormRequest
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
            'position' => 'required',
            'candidates' => 'required',
            'visibility' => 'required',
            'notify_me' => 'required',
            'allowed_voters' => 'required_if:visibility,1',
            'start_date' => 'date|after_or_equal:today',
            'end_date' => 'date|after_or_equal:start_date',
            'start_time' => 'required',
            'end_time' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'allowed_voters|required_if' => 'Visibility is set to private, so email(s) are required!!!',
        ];
    }
}
