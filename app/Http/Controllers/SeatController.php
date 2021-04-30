<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeatRequest;
use App\Http\Controllers\Controller;
use App\Services\Seat\SeatServiceInterface;

class SeatController extends Controller
{

    protected $seatServiceInterface;

    public function __construct(SeatServiceInterface $seatServiceInterface)
    {
        $this->seatServiceInterface = $seatServiceInterface;   
    }
    
    /**
     * getAvailableSeats
     *
     * @param  mixed $request
     * @return void
     */
    public function getAvailableSeats(SeatRequest $request)
    {
        return $this->seatServiceInterface->getAvailableSeats($request->validated());
    }
}
