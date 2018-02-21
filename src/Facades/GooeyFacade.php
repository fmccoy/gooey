<?php

namespace Gooey\Facades;

use Illuminate\Support\Facades\Facade;

class GooeyFacade extends Facade
{
  protected static function getFacadeAccessor() {
    return 'gooey';
  }
}
