<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dojo;

class NinjaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'bio'=> fake()->realText,
            'skill'=> fake()->numberBetween(0,100),
            'dojo_id'=> Dojo::inRandomOrder()->first()->id,  // This fetches a random dojo_id
        ];
    }
}
