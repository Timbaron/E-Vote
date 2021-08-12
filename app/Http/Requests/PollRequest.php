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
            'position.required' => 'Position is required',
            'candidates.required' => 'Candidates are required',
            'visibility.required' => 'Visibility is required',
            'allowed_voters.required_if' => 'Allowed voters email address are required if visibility is private',
            'start_date.date' => 'Start date must be a valid date',
            'start_date.after_or_equal' => 'Start date must be after or equal to today',
            'end_date.date' => 'End date must be a valid date',
            'end_date.after_or_equal' => 'End date must be after or equal to start date',
            'start_time.required' => 'Start time is required',
            'end_time.required' => 'End time is required',
            
        ];
    }
}
