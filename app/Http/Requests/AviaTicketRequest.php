<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AviaTicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'departure_city' => 'required',
            'departure_date' => 'required|date',
            'arrival_city' => 'required',
        ];
    }
}
