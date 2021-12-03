<?php

namespace ConfrariaWeb\Tag\Providers;

use ConfrariaWeb\Tag\Services\TagService;
use Illuminate\Support\ServiceProvider;

class TagServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../databases/Migrations');
        $this->publishes([__DIR__ . '/../../config/cw_tag.php' => config_path('cw_tag.php')], 'config');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /*$this->app->bind('TagService', function () {
            return new TagService();
        });*/
    }

}
