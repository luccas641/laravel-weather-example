<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\City;

class StaticDBTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFileRead()
    {
        $cityModel = new City(); 
        
        $this->assertEquals($cityModel->length(), 48);
    }

    public function testGetFirst() {

        $cityModel = new City(); 
        $city = $cityModel->collection()->first();
        
        $this->assertEquals($city->id, 3531732);
    }
}
