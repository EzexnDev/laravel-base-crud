<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingFormRequest extends FormRequest
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
            'guest_full_name' => 'required|string|min:3',
            'guest_credit_card' => 'required|string|min:3',
            'room' => 'required|string',
            'from_date' => 'required|date',
            'to_date' => 'required|date',
            'more_details' => 'string|nullable',
        ];
    }
}
