<?php

namespace Database\Factories;

use App\Models\Prevoznik;
use Illuminate\Database\Eloquent\Factories\Factory;

class KamionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tablice' => $this->faker->bothify('??-####-??/??-####-??'),
            'model' => $this->faker->randomElement($array = array('Mercedes-Benz', 'Volvo', 'MAN', 'SCANIA')),
            'vozac' => $this->faker->name($gender = 'male'),
            'prevoznik_id' => Prevoznik::factory()
        ];
    }
}
