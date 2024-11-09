<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dish_name' => fake()->unique()->text(),
            // 'last_name' => fake()->lastName(),
            // 'email' => fake()->unique()->safeEmail(),
            'price' => fake()->randomElements(['150', '120', '220', '149', '189'])[0],
            'category' => fake()->randomElements(['Chinese', 'indian', 'punjabi', 'continental', 'south indian'])[0],
            'hotel_name'  => fake()->firstName(),
        ];
    }
}
