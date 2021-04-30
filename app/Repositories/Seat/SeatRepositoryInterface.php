<?php

namespace App\Repositories\Seat;

interface SeatRepositoryInterface
{
    public function getAvailableSeats($data);
}