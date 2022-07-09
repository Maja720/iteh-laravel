<?php

namespace Database\Seeders;

use App\Models\President;
use Illuminate\Database\Seeder;

class PresidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        President::factory(24)->create();
    }
}
