<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WeatherService;

class WeatherController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $city)
    {
        $from = $request->input('from');
        $to = $request->input('to');

        $weather = WeatherService::getByCityId($city);
        if(!$weather) {
            return response()->json(['msg' => 'Resource not found'], 404);    
        }

        if($from && $to) {
            $weather = WeatherController::filterDate($weather, $from, $to);
        }
        return response()->json($weather);
    }
}
