<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PrevoznikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firma' => $this->faker->company(),
            'adresa' => $this->faker->address(),
            'direktor' => $this->faker->name(),
            'sajt' => $this->faker->url(),
        ];
    }
}
