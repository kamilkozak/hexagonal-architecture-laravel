<?php

namespace Src\Payment\Domain\Services;

use Src\Payment\Domain\Contracts\PaymentService as PaymentServiceContract;

class PaddlePaymentService implements PaymentServiceContract
{
    public function charge(int $bookingId, int $totalToPay): void
    {
        // TODO: Implement charge() method.
    }
}
