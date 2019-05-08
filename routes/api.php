<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('cities', 'CityController')->only([
    'index', 'show'
]);;
Route::apiResource('cities.weather', 'WeatherController')->only([
    'index'
]);;
