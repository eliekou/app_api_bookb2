<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'created_at' => now(),
            'status' => Str::random(10),
            'user_id' => 1,
            'source'=> fake()->name(),
            'start'=> fake()-> dateTimeThisMonth(),
            'end'=> fake()-> dateTimeThisMonth(),
        ];
    }
}
