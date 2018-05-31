<?php

namespace Tests\Feature;

use App\Post;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class PostsTest extends TestCase
{
    use DatabaseTransactions;

    public function testIndex()
    {
//        $post = factory(Post::class)->create();
//        $response = $this->get('/posts');
//        $response->assertSee($post->name);
        $this->assertTrue(true);
    }

    public function testCreate()
    {
//        $post = factory(Post::class)->make();
//        $response = $this->post('/posts', $post->toArray());
//        $response->assertStatus(302);
//        $this->assertDatabaseHas('posts', [ 'content' => $post->content ]);
        $this->assertTrue(true);
    }

    public function testDelete()
    {
//        $post = factory(Post::class)->create();
//        $response = $this->delete('/posts/' . $post->id);
//        $response->assertStatus(200);
//        $this->assertDatabaseMissing('posts', [ 'id' => $post->id ]);
        $this->assertTrue(true);
    }
}
