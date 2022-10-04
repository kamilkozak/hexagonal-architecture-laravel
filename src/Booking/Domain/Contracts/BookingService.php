<?php

namespace Src\Booking\Domain\Contracts;

interface BookingService
{
    public function storeBooking(array $data);
}
