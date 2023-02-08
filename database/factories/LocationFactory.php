<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->unique()->city(),
'is_outdoor' => fake()->boolean(),
            'created_at' => fake()->dateTimeThisDecade(),
            'updated_at' => fake()->dateTimeThisMonth(),
        ];
    }
}
