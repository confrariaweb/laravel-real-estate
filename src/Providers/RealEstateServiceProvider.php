<?php

namespace ConfrariaWeb\RealEstate\Providers;

use Illuminate\Support\ServiceProvider;
use ConfrariaWeb\RealEstate\Commands\InstallPackage;

class RealEstateServiceProvider extends ServiceProvider
{

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallPackage::class
            ]);
        }
    }

    public function register()
    {

    }

}
