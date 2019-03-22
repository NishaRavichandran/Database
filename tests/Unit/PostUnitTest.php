<?php

namespace Tests\Unit;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class PostUnitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $post = Post::inrandomorder()->first();

        $this->assertIsString($post->title);

    }
    public function testExample2()
    {
        $post = Post::inrandomorder()->first();

        $this->assertNull($post->name);

    }
    public function testExample3()
    {
        $post = Post::inrandomorder()->first();

        $this->assertInstanceOf('App\Post',$post);
    }
    public function testExample4()
    {
        $post = Post::all();
        $this->assertCount(500,$post);
    }
}
