<?php

namespace Tests\Feature;

 use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Providers\RouteServiceProvider;
use App\Models\User;

class MainScreenTest extends TestCase
{
    use RefreshDatabase;

    public function test_main_screen_is_not_for_guests()
    {
        $response = $this->get(RouteServiceProvider::HOME);

        $response->assertRedirect('/login');
    }

    public function test_authenticated_user_is_redirected_to_main_screen()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
