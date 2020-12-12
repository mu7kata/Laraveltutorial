<?php

namespace Tests\Feature;

use Carbon\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testHello()
    {
        $this->assertTrue(true);
        $arr = [];
        $this->assertEmpty($arr);

        $msg = "Hello";
        $this->assertEquals('Hello', $msg);

        $n = random_int(0, 100);
        $this->assertLessThan(100, $n);

        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/hello');
        $response->assertStatus(302);

        $response->assertStatus(200);
        $response = $this->get('/no_route');
        $response->assertStatus(404);
    }
}
