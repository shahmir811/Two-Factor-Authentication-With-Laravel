<?php


namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Authy extends Facade
{

  protected static function getFacadeAccessor()
  {
      return 'authy';
  }


}
