<?php

namespace App\Http\Controllers;

use App\Services\CityService;
use App\City;
use App\Http\Requests\CitiesRequest;

class CityController extends Controller
{
     /**
     * Display a listing of cities. Accept filter of latitude and weather.
     * @group  Cities
     * @queryParam  onlyHasWeather It will show only cities that has weather
     * @queryParam  lat Filter by lat. Required if lng is set.
     * @queryParam  lng Filter by lng. Requires id lat is set.
     *
     * @response [{"id": 3531732,"coord": {"lon": -90.533333,"lat": 19.85},"country": "MX","geoname": {"cl": "P","code": "PPLA","parent": 6942858},"name": "Campeche","stat": {"level": 1,"population": 205212},"stations": [{"id": 3968,"dist": 4,"kf": 1}],"zoom": 7}, {"id": 3531784,"coord": {"lon": -98.583328,"lat": 19.58333},"country": "MX","geoname": {"cl": "P","code": "PPL","parent": 3515359},"name": "Calpulalpan","stat": {"level": 1,"population": 29320},"stations": [{"id": 3998,"dist": 53,"kf": 1}, {"id": 4009,"dist": 51,"kf": 1}],"zoom": 9}]
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(CitiesRequest $request)
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
     * Display the specified city.
     * @group  Cities
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @response {"id":3531732,"coord":{"lon":-90.533333,"lat":19.85},"country":"MX","geoname":{"cl":"P","code":"PPLA","parent":6942858},"name":"Campeche","stat":{"level":1,"population":205212},"stations":[{"id":3968,"dist":4,"kf":1}],"zoom":7}
     * @response 404 {
     *  "message": "Resource not found"
     * }
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
