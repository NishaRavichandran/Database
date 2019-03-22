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
    public function testExample1()
    {
        $post = Post::inrandomorder()->first();

        $this->assertInstanceOf('App\Post',$post);
    }


}
