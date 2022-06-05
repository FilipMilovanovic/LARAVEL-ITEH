<?php

namespace Database\Factories;

use App\Models\Kamion;
use Illuminate\Database\Eloquent\Factories\Factory;

class TuraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'datumPolaska' => $this->faker->date($format = 'd-m-Y', $max = 'now'),
            'datumDolaska' => $this->faker->date($format = 'd-m-Y', $max = 'now'),
            'km' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 5000),
            'cena' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 50000),
            'kamion_id' => Kamion::factory()
        ];
    }
}
