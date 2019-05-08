<?php

namespace App\Services;

use App\Weather;

class WeatherService {
  public static function getByCityId($city) {
    $weatherModel = new Weather();
    $weather = $weatherModel->collection()->where('cityId', $city)->first();
    return $weather;
  } 

  public static function filterDateRange($weatherList, $from, $to) {
    return collect($weatherList)->whereBetween('dt', [$from, $to]);
  }
}