<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class WrestlersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->name(),
            'wins'=>fake()->randomnumber(),
            'lost'=>fake()->randomnumber(),
            'prize'=>'the destroyer',
            'price' =>fake()->randomnumber(),
            'image'=>'wrsl1.jpg',

        ];
    }
}
