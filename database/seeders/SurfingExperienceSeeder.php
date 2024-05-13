<?php

namespace Database\Seeders;

use App\Models\SurfingExperience;
use Illuminate\Database\Seeder;

class SurfingExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SurfingExperience::factory(2)->create();
    }
}
