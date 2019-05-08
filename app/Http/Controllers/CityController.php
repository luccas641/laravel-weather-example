<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CityService;
use App\City;

class CityController extends Controller
{
     /**
     * Display a listing of the resource.
     * @param  int  $onlyHasWeather
     * @param  int  $lat
     * @param  int  $lng
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $onlyHasWeather = $request->input('onlyHasWeather');
        $lat = $request->input('lat');
        $lng = $request->input('lng');

        $cities = [];
        if($onlyHasWeather) {
            $cities = CityService::getAllHasWeather();
        } else {
            $cities = CityService::getAll();
        }
        if($lat && $lng) {
            $cities = CityService::filterLocation($cities, $lat, $lng);
        }
       
        return response()->json($cities);        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cityModel = new City();
        $city = $cityModel->collection()->where('id', $id)->first();
        if($city) {
            return response()->json($city);
        }
        return response()->json(['msg' => 'Resource not found'], 404);
        
    }
}
