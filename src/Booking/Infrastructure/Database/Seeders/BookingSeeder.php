<?php

namespace Src\Booking\Infrastructure\Database\Seeders;

use Illuminate\Database\Seeder;
use Src\Booking\Domain\Models\Booking;
use Src\Payment\Domain\Models\Payment;
use Src\Room\Domain\Models\Room;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Booking::factory()
            ->count(25)
            ->create()
            ->each(fn (Booking $booking) => Payment::factory()->create([
                'booking_id' => $booking->getKey(),
                'total_to_pay' => Room::find($booking->room_id)->price,
            ]));
    }
}
