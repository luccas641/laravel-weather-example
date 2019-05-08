<?php

namespace App;

class StaticDBModel {
  protected $data; 
  protected $file;

  public function __construct() {
    try {
      $json = file_get_contents($this->file);
      $this->data = collect(json_decode($json));
  
    } catch (Exception $err) {
      die('Could not read '. $this->file);
    } 
  }

  public function length() {
    return $this->data->count();
  }

  public function collection() {
    return $this->data;
  }
}