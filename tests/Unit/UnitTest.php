<?php

namespace Tests\Unit;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UnitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample1()
    {
        $user = User::inrandomorder()->first();

        $this->assertInstanceOf('App\User',$user);
    }

    public function testExample2()
    {
        $user = User::inrandomorder()->first();

        $this->assertIsString($user->name);
    }

    public function testExample3()
    {
        $user = User::inrandomorder()->first();

        $this->assertStringMatchesFormat('%s@%s',$user->email);
    }

    public function testExample4()
    {
        $user = Post::inrandomorder()->first();

        $this->assertNull($user->name);
    }

    public function testExample5()
    {
        $user = User::all();

        $this->assertCount(502, $user);
    }

    public function testExample6()
    {
        $this->assertDirectoryExists('tests/Unit');
    }

    public function testExample7()
    {
        $this->assertFileNotEquals('tests/Unit/UnitTest.php', 'tests/Feature/LoginTest.php');
    }

    public function testExample8()
    {
        $this->assertFileExists('tests/Feature/ExampleTest.php', 'The file does not Exist');
    }

    public function testExample9()
    {
        $this->assertFileIsReadable('tests/Feature/RegisterTest.php');
    }

    
}
