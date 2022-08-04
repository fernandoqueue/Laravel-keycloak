<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Config;
use App\Services\Tenant\Auth\AuthUserServiceProvider;
use App\Services\Tenant\Auth\Guard\KeycloakWebGuard;
use App\Services\Tenant\KeycloakService;
use App\Http\Middleware\KeycloakCan;
use Auth;
use Gate;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Auth::extend('keycloak-web', function ($app, $name, array $config) {
            $provider = Auth::createUserProvider($config['provider']);
            return new KeycloakWebGuard($provider, $app->request);
        });

        $this->app->bind('keycloak-web', function($app) {
            return $app->make(KeycloakService::class);
        });

        $this->app->when(KeycloakService::class)->needs(ClientInterface::class)->give(function() {
            return new Client(Config::get('keycloak-web.guzzle_options', []));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Auth::provider('keycloak-users', function($app, array $config) {
            return new AuthUserServiceProvider($config['model']);
        });
    }
}
