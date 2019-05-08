<?php

namespace App;

class Weather extends StaticDBModel {
  protected $file = __dir__."/StaticDB/weather_list.json";
}