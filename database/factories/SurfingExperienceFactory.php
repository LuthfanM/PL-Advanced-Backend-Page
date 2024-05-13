<?php

namespace Database\Factories;

use App\Models\Surfer;
use App\Models\SurfingExperience;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SurfingExperience>
 */
class SurfingExperienceFactory extends Factory
{
    protected $model = SurfingExperience::class;

    public function definition()
    {
        return [
            'surfer_id' => Surfer::factory(),
            'visit_date' => $this->faker->date,
            'desired_board' => $this->faker->word,
            'experience' => $this->faker->numberBetween(0, 10)
        ];
    }
}
