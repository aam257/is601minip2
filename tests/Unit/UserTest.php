<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testInsertest()
    {
        $user = new User();
        $user->name = 'Jonnyy';
        $user->email = 'jonnyy@njit.edu';
        $user->password = 'passjonn';
        $this->assertTrue($user->save());
    }

    public function testUpdateUsertest()
    {

        $user = User::all()->last();
        $user->where('name', 'Jonnyy')->update(['name' => 'Steve Smith']);
        $this->assertTrue($user->save());

    }



}





















