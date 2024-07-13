<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => $this->faker->jobTitle(),
            'salary' => $this->faker->numberBetween($min = 10000, $max = 290000),
            'location' => $this->faker->randomElement(['Remote', 'Office']),
            'schedule' => $this->faker->randomElement(['Part Time', 'Full Time']),
            'url' => $this->faker->url(),
            'featured' => 'false'
        ];
    }
}
