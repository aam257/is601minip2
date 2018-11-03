<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use App\Cars;

class CarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testInserCartest()
    {
        $car = new Cars();
        $car->make = 'Honda';
        $car->model = 'Ennova';
        $car->year = '2010';
        $this->assertTrue($car->save());
    }

    public function testUpdateYeartest()
    {

        $car = Cars::all()->last();
        $car->where('id','51')->update(['year'=>2000]);
        $this->assertTrue($car->save());

    }



}





















