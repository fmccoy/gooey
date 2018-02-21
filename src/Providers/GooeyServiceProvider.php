<?php

namespace Gooey\Providers;

use Gooey\Services\GooeyHelpers;
use Illuminate\Support\ServiceProvider;

class GooeyServiceProvider extends ServiceProvider
{
  public function boot()
  {
    $this->registerViews();
  }

  public function register()
  {
     $this->app->alias('gooey', GooeyHelpers::class);
  }

  public function registerViews()
  {
    $this->loadViewsFrom(__DIR__.'/../../resources/views', 'gooey');
  }
}
