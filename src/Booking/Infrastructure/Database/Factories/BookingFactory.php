<?php

namespace Src\Booking\Infrastructure\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Src\Booking\Domain\Models\Booking;
use Src\Customer\Domain\Models\Customer;
use Src\Room\Domain\Models\Room;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Src\Booking\Domain\Models\Booking>
 */
class BookingFactory extends Factory
{
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'customer_id' => fn () => Customer::inRandomOrder()->first()->id,
            'room_id' => fn () => Room::inRandomOrder()->first()->id,
            'check_in' => $this->faker->dateTimeBetween('-7 days', '+7 days'),
            'check_out' => $this->faker->dateTimeBetween('+8 days', '+14 days'),
        ];
    }
}
