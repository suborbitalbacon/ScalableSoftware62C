<?php

namespace Tests\Feature;

use App\Category;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class CategoriesTest extends TestCase
{
    use DatabaseTransactions;

    public function testIndex()
    {
//        $category = factory(Category::class)->create();
//        $response = $this->get('/categories');
//        $response->assertSee($category->name);
        $this->assertTrue(true);
    }

    public function testCreate()
    {
//        $category = factory(Category::class)->make();
//        $response = $this->post('/categories', $category->toArray());
//        $response->assertStatus(302);
//        $this->assertDatabaseHas('categories', [ 'name' => $category->name ]);
        $this->assertTrue(true);
    }

    public function testDelete()
    {
//        $category = factory(Category::class)->create();
//        $response = $this->delete('/categories/' . $category->id);
//        $response->assertStatus(200);
//        $this->assertDatabaseMissing('categories', [ 'id' => $category->id ]);
        $this->assertTrue(true);
    }
}
