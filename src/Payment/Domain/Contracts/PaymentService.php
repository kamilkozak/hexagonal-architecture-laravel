<?php

namespace Src\Payment\Domain\Contracts;

interface PaymentService
{
    public function charge(int $bookingId, int $totalToPay): void;
}
