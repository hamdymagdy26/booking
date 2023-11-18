<?php

namespace App\Http\Requests;

use App\Http\Requests\AbstractRequest;

class SeatRequest extends AbstractRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
    return [
            'start' => 'required|exists:trips,id',
            'end' => 'required|exists:trips,id'
        ];
    }
}
