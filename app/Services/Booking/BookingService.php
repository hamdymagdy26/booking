<?php

namespace App\Services\Booking;

use App\Models\Booking;
use App\Repositories\Booking\BookingRepositoryInterface;
use App\Traits\ResponseHandler;
use Auth;

class BookingService implements BookingServiceInterface
{
    use ResponseHandler;
        
    /**
     * bookingRepositoryInterface
     *
     * @var mixed
     */
    protected $bookingRepositoryInterface;
    
    public function __construct(BookingRepositoryInterface $bookingRepositoryInterface)
    {
        $this->bookingRepositoryInterface = $bookingRepositoryInterface;
    }   
     
    /**
     * book
     *
     * @param  mixed $data
     * @return void
     */
    public function book($data)
    {
        $bookings = $this->bookingRepositoryInterface->book($data);
        
        if($bookings->isEmpty()) {
            $booking = Booking::create([
                'user_id' => Auth::id(),
                'trip_id' => $data['trip_id'],
                'seat_id' => $data['seat_id']
            ]);
            return $this->successResponse('success', $booking);
        }

        return $this->failResponse('error', "seat is already taken");
    }
}