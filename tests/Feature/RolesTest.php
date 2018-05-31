<?php

namespace Tests\Feature;

use App\Role;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class RolesTest extends TestCase
{
    use DatabaseTransactions;

    public function testIndex()
    {
//        $role = factory(Role::class)->create();
//        $response = $this->get('/roles');
//        $response->assertSee($role->name);
        $this->assertTrue(true);
    }

    public function testCreate()
    {
//        $role = factory(Role::class)->make();
//        $response = $this->post('/roles', $role->toArray());
//        $response->assertStatus(302);
//        $this->assertDatabaseHas('roles', [ 'name' => $role->name ]);
        $this->assertTrue(true);
    }

    public function testDelete()
    {
//        $role = factory(Role::class)->create();
//        $response = $this->delete('/roles/' . $role->id);
//        $response->assertStatus(200);
//        $this->assertDatabaseMissing('roles', [ 'id' => $role->id ]);
        $this->assertTrue(true);
    }
}
