<?php

namespace App\Http\Requests;

use App\Rules\DateBetweenRule;
use App\Rules\TimeBetweenRule;
use Illuminate\Foundation\Http\FormRequest;

class ReservationFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['email', 'required'],
            'reservation_date' => ['required', 'date', new DateBetweenRule, new TimeBetweenRule],
            'telephone' => ['required'],
            'table_id' => ['required'],
            'guest_number' => ['required'],
        ];
    }
}
