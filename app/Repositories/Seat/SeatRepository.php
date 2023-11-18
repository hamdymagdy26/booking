<?php

namespace App\Repositories\Seat;

use App\Models\Trip;

class SeatRepository implements SeatRepositoryInterface
{    
    /**
     * getAvailableSeats
     *
     * @param  mixed $data
     * @return void
     */
    public function getAvailableSeats($data)
    {
        $availableSeats = collect();
        if ($data['start'] && $data['end']) {
            Trip::query()->where('from', $data['start'])->where('to', $data['end'])->first()
                ->bus->seats->each(function ($seat) use (&$availableSeats) {
                if ($seat->bookings->isEmpty()) {
                    $availableSeats = $availableSeats->push($seat);
                }
            });
        }

        return $availableSeats;
    }
}