<?php

namespace Tests\Feature;

use Tests\TestCase;

class CityTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetById()
    {
        $response = $this->json('GET', '/api/cities/3531732');

        $response
            ->assertStatus(200)
            ->assertJson(array (
                'id' => 3531732,
                'coord' => 
                array (
                  'lon' => -90.533333,
                  'lat' => 19.85,
                ),
                'country' => 'MX',
                'geoname' => 
                array (
                  'cl' => 'P',
                  'code' => 'PPLA',
                  'parent' => 6942858,
                ),
                'name' => 'Campeche',
                'stat' => 
                array (
                  'level' => 1,
                  'population' => 205212,
                ),
                'stations' => 
                array (
                  0 => 
                  array (
                    'id' => 3968,
                    'dist' => 4,
                    'kf' => 1,
                  ),
                ),
                'zoom' => 7,
              ));
    }

     /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetAll()
    {
        $response = $this->json('GET', '/api/cities');

        $response
            ->assertStatus(200)
            ->assertJsonCount(48);
    }
    /**
    * A basic feature test example.
    *
    * @return void
    */
   public function testGetAllHasWeather()
   {
       $response = $this->json('GET', '/api/cities?onlyHasWeather=1');

       $response
           ->assertStatus(200)
           ->assertJsonCount(2);
   }

   /**
   * A basic feature test example.
   *
   * @return void
   */
  public function testFilterLocation()
  {
      $response = $this->json('GET', '/api/cities?lat=19.85&lng=-90.533333');

      $response
          ->assertStatus(200)
          ->assertJsonCount(1);
  }

    /**
    * A basic feature test example.
    *
    * @return void
    */
   public function testNotFound()
   {
       $response = $this->json('GET', '/api/cities/123');

       $response
           ->assertStatus(404);
   }
}
