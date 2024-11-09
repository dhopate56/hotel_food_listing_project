<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'name' => fake()->unique()->firstName(),
// 'last_name' => fake()->lastName(),
// 'email' => fake()->unique()->safeEmail(),
'location' => fake()->randomElements(['delhi', 'mumbai', 'kerala', 'kolkata', 'chennai'])[0],
'speciality' => fake()->randomElements(['Chinese', 'indian', 'punjabi', 'continental', 'south indian'])[0],

        ];
    }
}
