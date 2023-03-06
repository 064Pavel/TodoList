<?php

namespace Database\Factories;

use App\Models\Priority;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->text(10),
            'notes' => fake()->text(30),
            'date' => fake()->date,

            'user_id' => User::get()->random()->id,
            'priority_id' => Priority::get()->random()->id
        ];
    }
}
