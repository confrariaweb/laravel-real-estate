<?php

namespace ConfrariaWeb\RealEstate\Providers;

use ConfrariaWeb\RealEstate\Commands\InstallPackage;
use ConfrariaWeb\RealEstate\Contracts\PropertyBusinessContract;
use ConfrariaWeb\RealEstate\Contracts\PropertyContract;
use ConfrariaWeb\RealEstate\Contracts\PropertyFeatureContract;
use ConfrariaWeb\RealEstate\Contracts\PropertyTypeContract;
use ConfrariaWeb\RealEstate\Models\Property;
use ConfrariaWeb\RealEstate\Models\PropertyType;
use ConfrariaWeb\RealEstate\Observers\PropertyObserver;
use ConfrariaWeb\RealEstate\Observers\PropertyTypeObserver;
use ConfrariaWeb\RealEstate\Repositories\PropertyBusinessRepository;
use ConfrariaWeb\RealEstate\Repositories\PropertyFeatureRepository;
use ConfrariaWeb\RealEstate\Repositories\PropertyRepository;
use ConfrariaWeb\RealEstate\Repositories\PropertyTypeRepository;
use ConfrariaWeb\RealEstate\Services\PropertyBusinessService;
use ConfrariaWeb\RealEstate\Services\PropertyFeatureService;
use ConfrariaWeb\RealEstate\Services\PropertyService;
use ConfrariaWeb\RealEstate\Services\PropertyTypeService;
use ConfrariaWeb\Vendor\Traits\ProviderTrait;
use Illuminate\Support\ServiceProvider;

class RealEstateServiceProvider extends ServiceProvider
{
    use ProviderTrait;

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallPackage::class
            ]);
        }

        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../../databases/Migrations');
        $this->loadViewsFrom(__DIR__.'/../Views', 'real-estate');
        $this->registerSeedsFrom(__DIR__.'/../../databases/Seeds');

        Property::observe(PropertyObserver::class);
    }

    public function register()
    {
        $this->app->bind(PropertyContract::class, PropertyRepository::class);
        $this->app->singleton('PropertyService', function ($app) {
            return new PropertyService($app->make(PropertyContract::class));
        });

        $this->app->bind(PropertyTypeContract::class, PropertyTypeRepository::class);
        $this->app->singleton('PropertyTypeService', function ($app) {
            return new PropertyTypeService($app->make(PropertyTypeContract::class));
        });

        $this->app->bind(PropertyFeatureContract::class, PropertyFeatureRepository::class);
        $this->app->singleton('PropertyFeatureService', function ($app) {
            return new PropertyFeatureService($app->make(PropertyFeatureContract::class));
        });

        $this->app->bind(PropertyBusinessContract::class, PropertyBusinessRepository::class);
        $this->app->singleton('PropertyBusinessService', function ($app) {
            return new PropertyBusinessService($app->make(PropertyBusinessContract::class));
        });
    }

}
