<?php

namespace App\Http\Requests;

use App\Http\Requests\AbstractRequest;

class BookingRequest extends AbstractRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'trip_id' => 'required|exists:trips,id',
            'seat_id' => 'required|exists:seats,id'
        ];
    }
}
