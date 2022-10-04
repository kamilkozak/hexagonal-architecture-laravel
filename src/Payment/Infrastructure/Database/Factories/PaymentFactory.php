<?php

namespace Src\Payment\Infrastructure\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Src\Booking\Domain\Models\Booking;
use Src\Payment\Domain\Models\Enums\PaymentStatus;
use Src\Payment\Domain\Models\Payment;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Src\Payment\Domain\Models\Payment>
 */
class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'booking_id' => fn () => Booking::factory()->create()->getKey(),
            'total_to_pay' => $this->faker->numberBetween(100, 500),
            'status' => PaymentStatus::Succeeded,
        ];
    }
}
