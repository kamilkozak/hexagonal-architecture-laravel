<?php

namespace Src\Room\Infrastructure\Database\Seeders;

use Illuminate\Database\Seeder;
use Src\Room\Domain\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::factory()->count(20)->create();
    }
}
