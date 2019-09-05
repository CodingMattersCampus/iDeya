<?php

namespace App\Http\Requests\Events;

use Illuminate\Foundation\Http\FormRequest;

class CreateEventRequest extends FormRequest
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
            'title' => 'required|string',
            'type_id' => 'required|integer',
            'date' => 'required|date',
            'start_time' => 'required|time',
            'end_time' => 'required|time',
            'expected_no' => 'required|integer',
        ];
    }
}
