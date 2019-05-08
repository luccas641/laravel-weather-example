<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
     /**
     * Display a listing of the resource.
     * @param  int  $onlyHasWeather
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $cityModel = new City();
        $cities = $cityModel->collection()
            ->map(function($item, $key) {
                return [
                    'id' => $item->id,
                    'name' => $item->name
                ];
            })
            ->all();
        
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
