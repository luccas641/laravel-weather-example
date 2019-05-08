<?php

namespace App\Http\Controllers;

use App\Services\WeatherService;
use App\Http\Requests\WeatherRequest;

class WeatherController extends Controller
{
    /**
     * Display the weather for a city.
     * @group  Weather
     * @example cities/3531732/weather Get all weather information to the city.
     * @example cities/3531732/weather?from=2017-03-12&to=2017-03-21 Get weather information of the city filtered by date range.
      
     * @return \Illuminate\Http\Response
     * 
     * @queryParam  from Filter from date. Required if to is set.
     * @queryParam  to Filter to date. Requires id from is set.
     * 
     * @response {"cityId": 3531732,"data": [{"dt": 1489428000,"temp": {"day": 299.15,"min": 298.2,"max": 299.15,"night": 298.2,"eve": 299.15,"morn": 299.15},"pressure": 1027.35,"humidity": 100,"weather": [{"id": 803,"main": "Clouds","description": "broken clouds","icon": "04n"}],"speed": 6.71,"deg": 337,"clouds": 68,"uvi": 10.34}, {"dt": 1489514400,"temp": {"day": 297.66,"min": 297.04,"max": 297.98,"night": 297.54,"eve": 297.98,"morn": 297.04},"pressure": 1033.6,"humidity": 100,"weather": [{"id": 500,"main": "Rain","description": "light rain","icon": "10d"}],"speed": 7.28,"deg": 14,"clouds": 80,"rain": 0.59,"uvi": 10.83}, {"dt": 1489600800,"temp": {"day": 296.61,"min": 296.61,"max": 299.06,"night": 298.43,"eve": 297.87,"morn": 296.75},"pressure": 1035.33,"humidity": 100,"weather": [{"id": 800,"main": "Clear","description": "sky is clear","icon": "01d"}],"speed": 6.91,"deg": 38,"clouds": 0,"uvi": 10.96}]}
     * 
     * @response 404 {
     *  "message": "Resource not found"
     * }
     */
    public function index(WeatherRequest $request, $city)
    {
        $from = $request->input('from');
        $to = $request->input('to');

        $weather = WeatherService::getByCityId($city);
        if(!$weather) {
            return response()->json(['msg' => 'Resource not found'], 404);    
        }

        if($from && $to) {
            $weather->data = WeatherService::filterDateRange($weather->data, $from, $to);
        }
        return response()->json($weather);
    }
}
