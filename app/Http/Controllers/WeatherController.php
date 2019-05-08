<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Weather;

class WeatherController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index($city)
    {
        $weatherModel = new Weather();
        $weather = $weatherModel->collection()->where('cityId', $city)->first();
        if($weather) {
            return response()->json($weather);
        }
        return response()->json(['msg' => 'Resource not found'], 404);
        
    }

}
