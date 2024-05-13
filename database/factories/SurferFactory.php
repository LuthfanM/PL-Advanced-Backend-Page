<?php

namespace Database\Factories;

use App\Models\Surfer;
use Illuminate\Database\Eloquent\Factories\Factory;

class SurferFactory extends Factory
{
    protected $model = Surfer::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'country' => $this->faker->country,
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->phoneNumber,
            'id_card' => $this->faker->bothify('ID####??')
        ];
    }
}
