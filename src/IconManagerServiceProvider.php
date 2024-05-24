<?php

namespace Hungnm28\IconManager;

use Illuminate\Support\ServiceProvider;

class IconManagerServiceProvider extends ServiceProvider
{
    public function register()
    {
        parent::register();

    }

    public function boot()
    {
        $this->registerPublishing();
    }

    protected function registerPublishing()
{
    $this->publishes([
        __DIR__ . '/../publishes/icons/icons.svg' => public_path("assets/images/icons.svg")
    ], 'icon-manager');
}
}