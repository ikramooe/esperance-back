<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Whitecube\NovaPage\Pages\Manager;
use App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Manager $pages)
    {
        $pages->register('option', 'contact', \App\Nova\Templates\Contact::class);

        $this->app->singleton('lang', function ($app){
            return App::getLocale();
        });
    }
}
