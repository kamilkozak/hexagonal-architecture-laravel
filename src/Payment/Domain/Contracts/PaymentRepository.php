<?php

namespace Src\Payment\Domain\Contracts;

use Src\Payment\Domain\Models\Payment;

interface PaymentRepository
{
    public function createPayment(int $bookingId, int $totalToPay): Payment;
}
