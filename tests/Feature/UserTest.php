<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Support\Str;


class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    /*public function test_user_has_reservation(){
        $user = User::factory()->create();
        $reservation = Reservation::factory()->create(['user_id' => $user->id]);

        $this->assertInstanceOf(Reservation::class,$user->reservations);

        $this->assertEquals(1, $user->reservations->count()); 
    }*/
    public function test_user_model(){
        $user = User::factory()->create();
        //$reservation = Reservation::factory()->create(['user_id' => $user->id]);

        $this->assertDatabaseCount('users', 4);
        //$this->assertInstanceOf(Reservation::class, $user->reservations);
    }
}
