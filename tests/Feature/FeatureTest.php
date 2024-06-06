<?php

namespace Tests\Feature;
use App\Providers\RouteServiceProvider;
//use App\Models\User;
//use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
class FeatureTest extends TestCase
{
    public function test_show_registration_screen()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
    public function test_new_user_can_register()
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            "terms" => true,
        ]);
        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);

    }
}


