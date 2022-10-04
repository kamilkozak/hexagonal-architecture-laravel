<?php

namespace Src\Payment\Infrastructure\Repositories;

use Src\Payment\Domain\Contracts\PaymentRepository as PaymentRepositoryContract;
use Src\Payment\Domain\Models\Enums\PaymentStatus;
use Src\Payment\Domain\Models\Payment;

class PaymentRepository implements PaymentRepositoryContract
{
    public function createPayment(int $bookingId, int $totalToPay): Payment
    {
        return Payment::create([
            'booking_id' => $bookingId,
            'total_to_pay' => $totalToPay,
            'status' => PaymentStatus::Processing,
        ]);
    }
}
