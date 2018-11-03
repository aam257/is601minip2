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

    public function testDeleteCartest()
    {

        $car = Cars::all()->last();
        $this->assertTrue($car->delete());

    }

    public function testCarCounttest()
    {

        $car = Cars::all();
        $car->count = '50';
        $this->assertEquals(50, $car->count());

    }

    public function testCarYearTypetest()
    {

        $car = Cars::inRandomOrder()->first();
        $year = (int) $car->Year;
        $this->assertInternalType('int',$year);

    }

    public function testCarMaketest()
    {

        $car = Cars::inRandomOrder()->first();
        $this->assertContains($car->Make, ['Ford','Honda','Toyota']);

    }

    public function testCarModeltest()
    {

        $car = Cars::inRandomOrder()->first();
        $this->assertInternalType('string', $car->Model);

    }


}





















