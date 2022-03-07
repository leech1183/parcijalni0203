<?php

namespace Config;

class Config
{
  private function __construct()
  {
  }

  public static function get($file = '')
  {
    if ($file) {
      $podatak = require '../config/' . $file . '.php';
      return $podatak;
    }

    return false;
  }
}
