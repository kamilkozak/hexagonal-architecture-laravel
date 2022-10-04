<?php

namespace Src\Customer\Infrastructure\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Src\Customer\Domain\Models\Customer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Src\Customer\Domain\Models\Customer>
 */
class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
        ];
    }
}
