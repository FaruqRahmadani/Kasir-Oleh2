<?php
namespace App\Helpers;

use Request;

class RouteHelper
{
  public static function ActiveRoute($HelperName){
    $CurrentRouteName = Request::route()->getName();
    if ($HelperName == $CurrentRouteName) {
      return 'active';
    }
  }
}
