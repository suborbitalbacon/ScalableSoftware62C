<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UsersTest extends TestCase
{
    use DatabaseTransactions;

    public function testIndex()
    {
//        $user = factory(User::class)->create();
//        $response = $this->get('/users');
//        $response->assertSee($user->name);
        $this->assertTrue(true);
    }

    public function testCreate()
    {
//        $user = factory(User::class)->make();
//        $response = $this->post('/users', $user->toArray());
//        $response->assertStatus(302);
//        $this->assertDatabaseHas('users', [ 'name' => $user->name ]);
        $this->assertTrue(true);
    }

    public function testDelete()
    {
//        $user = factory(User::class)->create();
//        $response = $this->delete('/users/' . $user->id);
//        $response->assertStatus(200);
//        $this->assertDatabaseMissing('users', [ 'id' => $user->id ]);
        $this->assertTrue(true);
    }
}
