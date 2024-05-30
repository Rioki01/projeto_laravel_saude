<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any application authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //Auth::extend('custom', function ($app, $name, array $config) {
            // Aqui você pode retornar uma instância de sua classe de guarda personalizada
            // que implementa \Illuminate\Contracts\Auth\Guard.
           //  return new CustomGuard($app['hash'], $config['table']);
        //});
    }

    /**
     * Configure the password reset view.
     *
     * @return void
     */
    public function configurePasswordResetViews()
    {
        //
    }
}