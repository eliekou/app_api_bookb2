<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'user_id' =>Str::random(10),
            'id'=>Str::random(20),
            'State'=>Str::random(5),
            'source'=> fake()->name(),
            'StartUtc'=> fake()-> dateTimeThisMonth(),
            'EndUtc'=> fake()-> dateTimeThisMonth(),
        ];
    }
}
