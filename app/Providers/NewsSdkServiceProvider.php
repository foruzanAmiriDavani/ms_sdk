<?php

namespace News\App\Providers;

use Anik\Form\FormRequestServiceProvider;
use Flipbox\LumenGenerator\LumenGeneratorServiceProvider;
use Illuminate\Support\ServiceProvider;

class NewsSdkServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register Providers
        $this->app->register(LumenGeneratorServiceProvider::class);
        $this->app->register(FormRequestServiceProvider::class);

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
