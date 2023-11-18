<?php

namespace App\Services\Seat;

use App\Repositories\Seat\SeatRepositoryInterface;
use App\Traits\ResponseHandler;

class SeatService implements SeatServiceInterface
{
    use ResponseHandler;
        
    /**
     * seatRepositoryInterface
     *
     * @var mixed
     */
    protected $seatRepositoryInterface;
    
    public function __construct(SeatRepositoryInterface $seatRepositoryInterface)
    {
        $this->seatRepositoryInterface = $seatRepositoryInterface;
    }
      
    /**
     * getAvailableSeats
     *
     * @param  mixed $data
     * @return void
     */
    public function getAvailableSeats($data)
    {
        $seats = $this->seatRepositoryInterface->getAvailableSeats($data);
        if(is_null($seats)) {
            return $this->failResponse('error', 'There are not available seats');
        }
        return $this->successResponse('success', $seats);
    }
}