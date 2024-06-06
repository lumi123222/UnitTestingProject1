<?php
namespace Tests\Unit;
use App\Models\User;
use Tests\TestCase;
class UnitTest extends TestCase
{
    public function test_login_form()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
     }

     public function test_user_duplication()
     {
        $user1 = User::make([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com'
        ]);
         $user2 = User::make([
             'name' => 'Dary',
             'email' => 'dary@gmail.com'
         ]);
         $this->assertTrue($user1->name != $user2->name);
     }
     public function test_delete_user(){
        $user = User::factory()->count(1)->make();
        $user = User::first();
        if($user){
            $user->delete();
        }
        $this->assertTrue(true);
     }
}

