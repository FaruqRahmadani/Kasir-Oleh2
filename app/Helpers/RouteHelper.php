<?php
namespace App\Helpers;

use Request;

class RouteHelper
{
  public static function ActiveRoute($RouteName){
    $CurrentRouteName = Request::route()->getName();
    if ($RouteName == $CurrentRouteName) {
      return 'active';
    }
  }

  public static function JudulRoute($RouteName){
    return title_case(str_slug($RouteName, ' ', '-'));
  }
}
