<?php

namespace Hungnm28\IconManager;

use Illuminate\Support\Facades\Blade;
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
        Blade::directive('mIcon', function ($name,$width=0,$height=0,$viewBox=0, $attribute=0) {
            return "<?php echo mIcon($name,$width,$height,$viewBox,$attribute); ?>";
        });

    }

    protected function registerPublishing()
{
    $this->publishes([
        __DIR__ . '/../publishes/icons/icons.svg' => public_path("assets/images/icons.svg")
    ], 'icon-manager');
}
}