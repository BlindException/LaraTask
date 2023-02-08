<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Location;
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
            'user_id' => User::all()->random()->id,
            'location_id' => Location::all()->random()->id,
                        'text' => fake()->sentence(),
            'due_date' =>fake()->dateTimeThisMonth(),
            'is_complete' => fake()->boolean(),
            'date_completed' => now(),
            'created_at' =>fake()->dateTimeThisDecade(),
            'updated_at' => fake()->dateTimeThisMonth(),
        ];
    }
}
