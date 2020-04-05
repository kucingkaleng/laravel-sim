<?php

namespace ARA\LaravelSim\Utils;

class Getter {
  public static function getView ($page, $data) {
    return view()->first(['ara.laravel-sim.'.$page, 'LaravelSim::'.$page], $data);
  }
}