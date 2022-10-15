<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form(){
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'John Doe',
            'email' => 'johdoe@gmail.com'
        ]);

        $user2 = User::make([
            'name' => 'Dary',
            'email' => 'dary@gmail.com'
        ]);

        $this->assertTrue($user1->name != $user2->name);
    }

    public function test_it_stores_new_users()
    {
        $response = $this->post('/register',[
            'name' => 'Dary',
            'email'=> 'dary@gmail.com',
            'password' => 'dary1234',
            'password_confirmation' => "dary1234"
        ]);

        //$this->assertAuthenticated();
        $response->assertRedirect('/dashboard');
    }

    public function test_database()
    {
        $this->assertDatabaseHas('users',[
            'name' => 'Dary'
        ]);
    }

    public function test_if_seeders_work()
    {
        $this->seed();
    }
}
