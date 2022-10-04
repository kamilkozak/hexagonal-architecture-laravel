<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Src\Booking\Infrastructure\Database\Seeders\BookingSeeder;
use Src\Customer\Infrastructure\Database\Seeders\CustomerSeeder;
use Src\Room\Infrastructure\Database\Seeders\RoomSeeder;
use Src\Room\Infrastructure\Database\Seeders\RoomTypeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        /** @var User $user */
        $user = \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $user->tokens()->create([
            'name' => 'test',
            'token' => hash('sha256', 'N7fp6GTjO9CJD1QIhqv0Ty1ZZbJeS3tFIbToFJZQ'),
            'abilities' => ["*"],
        ]);

        $this->call([
            RoomTypeSeeder::class,
            RoomSeeder::class,
            CustomerSeeder::class,
            BookingSeeder::class,
        ]);
    }
}
