<?php

namespace Src\Room\Infrastructure\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\WithFaker;
use Src\Room\Domain\Models\RoomType;

class RoomTypeSeeder extends Seeder
{
    use WithFaker;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->setUpFaker();

        $types = [
            'Standard Room',
            'Superior Room',
            'Deluxe Room',
        ];

        foreach ($types as $name) {
            RoomType::create([
                'name' => $name,
                'information' => $this->faker->sentence(),
            ]);
        };
    }
}
