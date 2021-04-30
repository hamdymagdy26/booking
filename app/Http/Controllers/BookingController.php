<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Http\Controllers\Controller;
use App\Services\Booking\BookingServiceInterface;

class BookingController extends Controller
{
    
    /**
     * bookingServiceInterface
     *
     * @var mixed
     */
    protected $bookingServiceInterface;

    public function __construct(BookingServiceInterface $bookingServiceInterface)
    {
        $this->bookingServiceInterface = $bookingServiceInterface;   
    }

    /**
     * book
     *
     * @param  mixed $request
     * @return void
     */
    public function book(BookingRequest $request)
    {
        return $this->bookingServiceInterface->book($request->validated());
    }
}
