<?php

namespace Src\Booking\Infrastructure\Repositories;

use Src\Booking\Domain\Contracts\BookingRepository as BookingRepositoryContract;
use Src\Booking\Domain\Models\Booking;

class BookingRepository implements BookingRepositoryContract
{
    public function createBooking(array $data): Booking
    {
        return Booking::create([
            'customer_id' => $data['customer_id'],
            'room_id' => $data['customer_id'],
            'check_in' => $data['check_in'],
            'check_out' => $data['check_out'],
        ]);
    }
}
