<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Surfer;

class SurferSeeder extends Seeder
{
    public function run()
    {
        Surfer::factory(2)->create();
    }
}
