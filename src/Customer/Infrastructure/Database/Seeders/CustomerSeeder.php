<?php

namespace Src\Customer\Infrastructure\Database\Seeders;

use Illuminate\Database\Seeder;
use Src\Customer\Domain\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory()->count(5)->create();
    }
}
