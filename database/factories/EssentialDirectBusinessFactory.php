<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EssentialDirectBusinessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // generate fake data to be used for the development
            'image_path' => $this->faker->imageUrl(),
            'businessID' => $this->faker->unique()->randomNumber(5),
            'is_Opened' => $this->faker->boolean,
            'last_visited' => $this->faker->dateTimeThisYear(), // Generates a random date within the current year
            'total_visited' => $this->faker->numberBetween(1, 100),
            'category' => $this->faker->words(3, true), // Generates 3 words as a category
            'full_name' => $this->faker->name,
            'phone_number' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->address,
            'bank_details' => $this->faker->creditCardNumber,
            'is_verified' => $this->faker->boolean,
        ];
    }
}
