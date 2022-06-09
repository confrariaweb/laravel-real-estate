<?php

namespace ConfrariaWeb\RealEstate\Providers;

use App\Models\User;
use ConfrariaWeb\RealEstate\Observers\UserObserver;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;

class RealEstateServiceProvider extends ServiceProvider
{

    public function boot()
    {

        $this->loadRoutesFrom(__DIR__.'/../Routes/api.php');
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');

        $this->loadMigrationsFrom(__DIR__ . '/../../databases/Migrations');

        $this->loadViewsFrom(__DIR__.'/../Views', 'real-estate');
        $this->loadViewsFrom(storage_path('app/public/real-estate'), 'real-estate-storage');

        $this->registerSeedsFrom(__DIR__.'/../../databases/Seeds');

        $this->publishes([__DIR__ . '/../../storage' => storage_path('app/public')], 'storage');
        $this->publishes([__DIR__ . '/../../public' => public_path()], 'public');

        //Property::observe(PropertyObserver::class);
        //Site::observe(SiteObserver::class);
        User::observe(UserObserver::class);
    }

    public function register()
    {
        //
    }

    /**
     * Register seeds.
     *
     * @param string  $path
     * @return void
     */
    protected function registerSeedsFrom($path)
    {
        if ($this->app->runningInConsole()) {
            $command = Request::server('argv', null);
            if (is_array($command)) {
                $command = implode(' ', $command);
                if ($command == "artisan db:seed") {
                    $file_names = glob( $path . '/*.php');
                    foreach ($file_names as $filename)
                    {
                        $classes = $this->getClassesFromFile($filename);
                        foreach ($classes as $class) {
                            Artisan::call('db:seed', ['--class' => $class]);
                            //Artisan::call('db:seed', [ '--class' => $class, '--force' => '' ]);
                        }
                    }
                }
            }
        }
    }

    /**
     * Get full class names declared in the specified file.
     *
     * @param string $filename
     * @return array an array of class names.
     */
    private function getClassesFromFile(string $filename) : array
    {
        // Get namespace of class (if vary)
        $namespace = "";
        $lines = file($filename);
        $namespaceLines = preg_grep('/^namespace /', $lines);
        if (is_array($namespaceLines)) {
            $namespaceLine = array_shift($namespaceLines);
            $match = array();
            preg_match('/^namespace (.*);$/', $namespaceLine, $match);
            $namespace = array_pop($match);
        }

        // Get name of all class has in the file.
        $classes = array();
        $php_code = file_get_contents($filename);
        $tokens = token_get_all($php_code);
        $count = count($tokens);
        for ($i = 2; $i < $count; $i++) {
            if ($tokens[$i - 2][0] == T_CLASS && $tokens[$i - 1][0] == T_WHITESPACE && $tokens[$i][0] == T_STRING) {
                $class_name = $tokens[$i][1];
                if ($namespace !== "") {
                    $classes[] = $namespace . "\\$class_name";
                } else {
                    $classes[] = $class_name;
                }
            }
        }

        return $classes;
    }

}
