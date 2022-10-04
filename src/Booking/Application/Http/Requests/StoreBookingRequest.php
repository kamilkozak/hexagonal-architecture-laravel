<?php

namespace Src\Booking\Application\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
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
            'customer_id' => ['required'],
            'room_id' => ['required'],
            'check_in' => ['required', 'date', 'date_format:Y-m-d'],
            'check_out' => ['required', 'after:check_in', 'date_format:Y-m-d'],
        ];
    }
}
