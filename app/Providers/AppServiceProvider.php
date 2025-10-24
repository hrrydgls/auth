<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // By providing a view name...
        Passport::authorizationView('auth.oauth.authorize');

        // By providing a closure...
        // Passport::authorizationView(
        //     fn($parameters) => Inertia::render('Auth/OAuth/Authorize', [
        //         'request' => $parameters['request'],
        //         'authToken' => $parameters['authToken'],
        //         'client' => $parameters['client'],
        //         'user' => $parameters['user'],
        //         'scopes' => $parameters['scopes'],
        //     ])
        // );
    }
}
