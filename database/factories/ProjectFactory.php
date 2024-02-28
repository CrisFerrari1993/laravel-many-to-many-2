<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            "title" => str_replace(' ', '_', fake() -> words(3, true)),
            "framework" => fake() ->  randomElement(['Laravel', 'VUE', 'none']),
            "description" => fake() -> text(),
            "main_picture" => null
        ];
    }
}
