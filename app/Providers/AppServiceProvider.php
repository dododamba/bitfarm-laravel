<?php

namespace App\Providers;

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
      \Braintree\Configuration::environment(config('services.braintree.environment'));
      \Braintree\Configuration::merchantId(config('services.braintree.merchant_id'));
      \Braintree\Configuration::publicKey(config('services.braintree.public_key'));
      \Braintree\Configuration::privateKey(config('services.braintree.private_key'));
    }
}
