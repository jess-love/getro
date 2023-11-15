<?php

namespace App\Providers;

use App\Http\ViewComposers\HeaderComposer;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer(
            ['contact-us', 'about-us', 'index','products-category','Product-details', 'product-grid-sidebar-banner', 'account', 'ecommerce-faq', 'track-order', 'track-order', 'order-history']
            , HeaderComposer::class);
    }
}
