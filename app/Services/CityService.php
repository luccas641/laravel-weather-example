<?php

namespace App\Services;

use App\City;
use App\Weather;

class CityService {
  public static function getAll() {
    $cityModel = new City();
    $cities = $cityModel->collection();
    return $cities;
  } 
  public static function getAllHasWeather() {
    $weatherModel = new Weather();
    $weather = $weatherModel->collection()->pluck('cityId')->all();
    
    $cities = CityService::getAll();
    $cities = $cities->filter(function($item) use ($weather) {
      return in_array($item->id, $weather);
    });

    return $cities;
  }

  public static function filterDateRange() {
    
  }

  public static function filterLocation($cities, $lat, $lng) {
    
    $cities = $cities->filter(function($item) use ($lat, $lng) {
      return $item->coord->lat == $lat && $item->coord->lon == $lng;
    });

    return $cities;
  }
}