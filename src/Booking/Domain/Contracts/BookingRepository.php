<?php

namespace Src\Booking\Domain\Contracts;

use Src\Booking\Domain\Models\Booking;

interface BookingRepository
{
    public function createBooking(array $data): Booking;
}
