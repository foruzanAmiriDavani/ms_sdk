<?php

namespace News\App\Providers;

use Illuminate\Support\ServiceProvider;

class NewsSdkServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register Providers
        $this->app->register(Flipbox\LumenGenerator\LumenGeneratorServiceProvider::class);
        $this->app->register(\Anik\Form\FormRequestServiceProvider::class);

        // Register Commands
        if($this->app->runningInConsole()) {
            $this->commands(\Laravelista\LumenVendorPublish\VendorPublishCommand::class);
        }
    }

    public function boot()
    {
        //
    }
}
