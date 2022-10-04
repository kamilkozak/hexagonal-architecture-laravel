<?php

namespace Src\Room\Infrastructure\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Src\Room\Domain\Models\Room;
use Src\Room\Domain\Models\RoomType;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Src\Room\Domain\Models\Room>
 */
class RoomFactory extends Factory
{
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'room_type_id' => fn () => RoomType::inRandomOrder()->first()->getKey(),
            'active' => 1,
            'number' => $this->faker->unique()->numberBetween(1, 20),
            'price' => $this->faker->numberBetween(100, 500),
        ];
    }
}
