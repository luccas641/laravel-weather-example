<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WatherTest extends TestCase
{
      /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetByCityId()
    {
        $response = $this->json('GET', '/api/cities/3531732/weather');

        $response
            ->assertStatus(200)
            ->assertJson(array (
                'cityId' => 3531732,
                'data' => 
                array (
                  0 => 
                  array (
                    'dt' => 1489428000,
                    'temp' => 
                    array (
                      'day' => 299.15,
                      'min' => 298.2,
                      'max' => 299.15,
                      'night' => 298.2,
                      'eve' => 299.15,
                      'morn' => 299.15,
                    ),
                    'pressure' => 1027.35,
                    'humidity' => 100,
                    'weather' => 
                    array (
                      0 => 
                      array (
                        'id' => 803,
                        'main' => 'Clouds',
                        'description' => 'broken clouds',
                        'icon' => '04n',
                      ),
                    ),
                    'speed' => 6.71,
                    'deg' => 337,
                    'clouds' => 68,
                    'uvi' => 10.34,
                  ),
                  1 => 
                  array (
                    'dt' => 1489514400,
                    'temp' => 
                    array (
                      'day' => 297.66,
                      'min' => 297.04,
                      'max' => 297.98,
                      'night' => 297.54,
                      'eve' => 297.98,
                      'morn' => 297.04,
                    ),
                    'pressure' => 1033.6,
                    'humidity' => 100,
                    'weather' => 
                    array (
                      0 => 
                      array (
                        'id' => 500,
                        'main' => 'Rain',
                        'description' => 'light rain',
                        'icon' => '10d',
                      ),
                    ),
                    'speed' => 7.28,
                    'deg' => 14,
                    'clouds' => 80,
                    'rain' => 0.59,
                    'uvi' => 10.83,
                  ),
                  2 => 
                  array (
                    'dt' => 1489600800,
                    'temp' => 
                    array (
                      'day' => 296.61,
                      'min' => 296.61,
                      'max' => 299.06,
                      'night' => 298.43,
                      'eve' => 297.87,
                      'morn' => 296.75,
                    ),
                    'pressure' => 1035.33,
                    'humidity' => 100,
                    'weather' => 
                    array (
                      0 => 
                      array (
                        'id' => 800,
                        'main' => 'Clear',
                        'description' => 'sky is clear',
                        'icon' => '01d',
                      ),
                    ),
                    'speed' => 6.91,
                    'deg' => 38,
                    'clouds' => 0,
                    'uvi' => 10.96,
                  ),
                  3 => 
                  array (
                    'dt' => 1489687200,
                    'temp' => 
                    array (
                      'day' => 298.13,
                      'min' => 296.88,
                      'max' => 299.8,
                      'night' => 298.48,
                      'eve' => 299.8,
                      'morn' => 296.88,
                    ),
                    'pressure' => 1035,
                    'humidity' => 0,
                    'weather' => 
                    array (
                      0 => 
                      array (
                        'id' => 500,
                        'main' => 'Rain',
                        'description' => 'light rain',
                        'icon' => '10d',
                      ),
                    ),
                    'speed' => 6.21,
                    'deg' => 74,
                    'clouds' => 11,
                    'rain' => 1.32,
                    'uvi' => 11.32,
                  ),
                  4 => 
                  array (
                    'dt' => 1489773600,
                    'temp' => 
                    array (
                      'day' => 298.76,
                      'min' => 296.7,
                      'max' => 300.16,
                      'night' => 299.77,
                      'eve' => 300.16,
                      'morn' => 296.7,
                    ),
                    'pressure' => 1032.82,
                    'humidity' => 0,
                    'weather' => 
                    array (
                      0 => 
                      array (
                        'id' => 500,
                        'main' => 'Rain',
                        'description' => 'light rain',
                        'icon' => '10d',
                      ),
                    ),
                    'speed' => 4.51,
                    'deg' => 74,
                    'clouds' => 12,
                    'rain' => 0.37,
                    'uvi' => 10.79,
                  ),
                  5 => 
                  array (
                    'dt' => 1489860000,
                    'temp' => 
                    array (
                      'day' => 300.26,
                      'min' => 298.05,
                      'max' => 300.74,
                      'night' => 300,
                      'eve' => 300.74,
                      'morn' => 298.05,
                    ),
                    'pressure' => 1033.36,
                    'humidity' => 0,
                    'weather' => 
                    array (
                      0 => 
                      array (
                        'id' => 800,
                        'main' => 'Clear',
                        'description' => 'sky is clear',
                        'icon' => '01d',
                      ),
                    ),
                    'speed' => 4.98,
                    'deg' => 50,
                    'clouds' => 0,
                    'uvi' => 11.2,
                  ),
                  6 => 
                  array (
                    'dt' => 1489946400,
                    'temp' => 
                    array (
                      'day' => 299.45,
                      'min' => 298.12,
                      'max' => 300.78,
                      'night' => 300.15,
                      'eve' => 300.78,
                      'morn' => 298.12,
                    ),
                    'pressure' => 1033.67,
                    'humidity' => 0,
                    'weather' => 
                    array (
                      0 => 
                      array (
                        'id' => 500,
                        'main' => 'Rain',
                        'description' => 'light rain',
                        'icon' => '10d',
                      ),
                    ),
                    'speed' => 6.4,
                    'deg' => 54,
                    'clouds' => 7,
                    'uvi' => 10.39,
                  ),
                  7 => 
                  array (
                    'dt' => 1490032800,
                    'temp' => 
                    array (
                      'day' => 300,
                      'min' => 298.77,
                      'max' => 300.6,
                      'night' => 300.36,
                      'eve' => 300.6,
                      'morn' => 298.77,
                    ),
                    'pressure' => 1031.39,
                    'humidity' => 0,
                    'weather' => 
                    array (
                      0 => 
                      array (
                        'id' => 500,
                        'main' => 'Rain',
                        'description' => 'light rain',
                        'icon' => '10d',
                      ),
                    ),
                    'speed' => 4.43,
                    'deg' => 70,
                    'clouds' => 7,
                    'uvi' => 11.07,
                  ),
                  8 => 
                  array (
                    'dt' => 1490119200,
                    'temp' => 
                    array (
                      'day' => 300.14,
                      'min' => 298.32,
                      'max' => 300.67,
                      'night' => 300.64,
                      'eve' => 300.67,
                      'morn' => 298.32,
                    ),
                    'pressure' => 1027.91,
                    'humidity' => 0,
                    'weather' => 
                    array (
                      0 => 
                      array (
                        'id' => 500,
                        'main' => 'Rain',
                        'description' => 'light rain',
                        'icon' => '10d',
                      ),
                    ),
                    'speed' => 4.18,
                    'deg' => 112,
                    'clouds' => 0,
                    'uvi' => 11.07,
                  ),
                  9 => 
                  array (
                    'dt' => 1490205600,
                    'temp' => 
                    array (
                      'day' => 301.06,
                      'min' => 298.95,
                      'max' => 301.5,
                      'night' => 301.43,
                      'eve' => 301.5,
                      'morn' => 298.95,
                    ),
                    'pressure' => 1023.43,
                    'humidity' => 0,
                    'weather' => 
                    array (
                      0 => 
                      array (
                        'id' => 800,
                        'main' => 'Clear',
                        'description' => 'sky is clear',
                        'icon' => '01d',
                      ),
                    ),
                    'speed' => 6.03,
                    'deg' => 135,
                    'clouds' => 0,
                    'uvi' => 11.07,
                  ),
                  10 => 
                  array (
                    'dt' => 1490292000,
                    'temp' => 
                    array (
                      'day' => 302.27,
                      'min' => 300.01,
                      'max' => 302.27,
                      'night' => 300.96,
                      'eve' => 301.8,
                      'morn' => 300.01,
                    ),
                    'pressure' => 1020.67,
                    'humidity' => 0,
                    'weather' => 
                    array (
                      0 => 
                      array (
                        'id' => 800,
                        'main' => 'Clear',
                        'description' => 'sky is clear',
                        'icon' => '01d',
                      ),
                    ),
                    'speed' => 4.72,
                    'deg' => 135,
                    'clouds' => 0,
                    'uvi' => 11.07,
                  ),
                  11 => 
                  array (
                    'dt' => 1490378400,
                    'temp' => 
                    array (
                      'day' => 300.96,
                      'min' => 299.36,
                      'max' => 300.96,
                      'night' => 299.36,
                      'eve' => 300.21,
                      'morn' => 300.59,
                    ),
                    'pressure' => 1024.75,
                    'humidity' => 0,
                    'weather' => 
                    array (
                      0 => 
                      array (
                        'id' => 500,
                        'main' => 'Rain',
                        'description' => 'light rain',
                        'icon' => '10d',
                      ),
                    ),
                    'speed' => 4.99,
                    'deg' => 218,
                    'clouds' => 38,
                    'rain' => 0.25,
                    'uvi' => 11.07,
                  ),
                  12 => 
                  array (
                    'dt' => 1490464800,
                    'temp' => 
                    array (
                      'day' => 300.62,
                      'min' => 299.15,
                      'max' => 300.62,
                      'night' => 299.57,
                      'eve' => 299.99,
                      'morn' => 299.15,
                    ),
                    'pressure' => 1025.94,
                    'humidity' => 0,
                    'weather' => 
                    array (
                      0 => 
                      array (
                        'id' => 500,
                        'main' => 'Rain',
                        'description' => 'light rain',
                        'icon' => '10d',
                      ),
                    ),
                    'speed' => 3.74,
                    'deg' => 214,
                    'clouds' => 10,
                    'rain' => 0.74,
                    'uvi' => 11.07,
                  ),
                  13 => 
                  array (
                    'dt' => 1490551200,
                    'temp' => 
                    array (
                      'day' => 301.38,
                      'min' => 299.92,
                      'max' => 301.38,
                      'night' => 300.5,
                      'eve' => 300.4,
                      'morn' => 299.92,
                    ),
                    'pressure' => 1026.81,
                    'humidity' => 0,
                    'weather' => 
                    array (
                      0 => 
                      array (
                        'id' => 500,
                        'main' => 'Rain',
                        'description' => 'light rain',
                        'icon' => '10d',
                      ),
                    ),
                    'speed' => 1,
                    'deg' => 176,
                    'clouds' => 1,
                    'rain' => 0.56,
                    'uvi' => 11.07,
                  ),
                  14 => 
                  array (
                    'dt' => 1490637600,
                    'temp' => 
                    array (
                      'day' => 301.91,
                      'min' => 299.8,
                      'max' => 301.95,
                      'night' => 301.95,
                      'eve' => 300.94,
                      'morn' => 299.8,
                    ),
                    'pressure' => 1027.59,
                    'humidity' => 0,
                    'weather' => 
                    array (
                      0 => 
                      array (
                        'id' => 800,
                        'main' => 'Clear',
                        'description' => 'sky is clear',
                        'icon' => '01d',
                      ),
                    ),
                    'speed' => 2.51,
                    'deg' => 134,
                    'clouds' => 26,
                    'uvi' => 11.07,
                  ),
                  15 => 
                  array (
                    'dt' => 1490724000,
                    'temp' => 
                    array (
                      'day' => 301.95,
                      'min' => 300.68,
                      'max' => 301.95,
                      'night' => 301.7,
                      'eve' => 301.7,
                      'morn' => 300.68,
                    ),
                    'pressure' => 1025.73,
                    'humidity' => 0,
                    'weather' => 
                    array (
                      0 => 
                      array (
                        'id' => 800,
                        'main' => 'Clear',
                        'description' => 'sky is clear',
                        'icon' => '01d',
                      ),
                    ),
                    'speed' => 2.15,
                    'deg' => 108,
                    'clouds' => 0,
                    'uvi' => 11.07,
                  ),
                )
            )
        );
    }


      /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testFilterDate()
    {
        $response = $this->json('GET', '/api/cities/3531732/weather?from=2017-03-12&to=2017-03-21');

        $response
            ->assertStatus(200)
            ->assertJson(array (
                'cityId' => 3531732,
                'data' => 
                array (
                  0 => 
                  array (
                    'dt' => 1489428000,
                    'temp' => 
                    array (
                      'day' => 299.15,
                      'min' => 298.2,
                      'max' => 299.15,
                      'night' => 298.2,
                      'eve' => 299.15,
                      'morn' => 299.15,
                    ),
                    'pressure' => 1027.35,
                    'humidity' => 100,
                    'weather' => 
                    array (
                      0 => 
                      array (
                        'id' => 803,
                        'main' => 'Clouds',
                        'description' => 'broken clouds',
                        'icon' => '04n',
                      ),
                    ),
                    'speed' => 6.71,
                    'deg' => 337,
                    'clouds' => 68,
                    'uvi' => 10.34,
                  ),
              )
            )
        );
    }

     /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testNotFound()
    {
        $response = $this->json('GET', '/api/cities/123/weather');

        $response
            ->assertStatus(404);
    }

    /**
    * A basic feature test example.
    *
    * @return void
    */
    public function testInvalidCall()
    {
      $response = $this->json('GET', '/api/cities/3531732/weather?from=2017-03-12');

       $response
           ->assertStatus(422);
   }
}
