<?php

namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FeatureTest extends TestCase
{

    public function testRegister()
    {

        $response = $this->get('/register');
        $response->assertStatus(200);

    }

    public function testLoginPage()
    {

        $response = $this->get('/login');
        $response->assertStatus(200);

    }

    public function testAboutPage()
    {

        $response = $this->get('/about');
        $response->assertStatus(200);

    }

    public function testContactPage()
    {

        $response = $this->get('/contact');
        $response->assertStatus(200);

    }

}



















