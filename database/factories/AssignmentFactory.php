<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AssignmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'course_id' => \App\Models\Course::factory(),
            'user_id' => \App\Models\User::factory(),
            'due_date' => $this->faker->dateTimeBetween('now', '+1 month'),
        ];
    }
}
