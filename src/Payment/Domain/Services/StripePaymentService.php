<?php

namespace Src\Payment\Domain\Services;

use Src\Payment\Domain\Contracts\PaymentRepository;
use Src\Payment\Domain\Contracts\PaymentService as PaymentServiceContract;

class StripePaymentService implements PaymentServiceContract
{
    public function __construct(private PaymentRepository $paymentRepository)
    {
    }

    public function charge(int $bookingId, int $totalToPay): void
    {
        $this->paymentRepository->createPayment($bookingId, $totalToPay);
    }
}
