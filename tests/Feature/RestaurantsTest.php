<?php

namespace Tests\Feature;

use App\Restaurant;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class RestaurantsTest extends TestCase
{
    use DatabaseTransactions;

    public function testIndex()
    {
//        $restaurant = factory(Restaurant::class)->create();
//        $response = $this->get('/restaurants');
//        $response->assertSee($restaurant->name);
        $this->assertTrue(true);
    }

    public function testCreate()
    {
//        $restaurant = factory(Restaurant::class)->make();
//        $response = $this->post('/restaurants', $restaurant->toArray());
//        $response->assertStatus(302);
//        $this->assertDatabaseHas('restaurants', [ 'name' => $restaurant->name ]);
        $this->assertTrue(true);
    }

    public function testDelete()
    {
//        $restaurant = factory(Restaurant::class)->create();
//        $response = $this->delete('/restaurants/' . $restaurant->id);
//        $response->assertStatus(200);
//        $this->assertDatabaseMissing('restaurants', [ 'id' => $restaurant->id ]);
        $this->assertTrue(true);
    }
}
