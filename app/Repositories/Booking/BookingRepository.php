<?php

namespace App\Repositories\Booking;

use App\Models\Booking;

class BookingRepository implements BookingRepositoryInterface
{    
    /**
     * book
     *
     * @param  mixed $data
     * @return void
     */
    public function book($data)
    {
        return Booking::where('trip_id', $data['trip_id'])
                            ->where('seat_id', $data['seat_id'])->get();

    }
}