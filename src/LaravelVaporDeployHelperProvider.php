<?php

namespace Stephenkhoo\LaravelVaporDeployHelper;

use Illuminate\Support\ServiceProvider;

class LaravelVaporDeployHelperProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\ComposerMirrorPathRepoSetToTrue::class,
            ]);
        }
    }
}
