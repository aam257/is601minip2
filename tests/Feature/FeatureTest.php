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



}
