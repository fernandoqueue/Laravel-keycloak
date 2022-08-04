<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomainOrSubdomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware('tenant')->group(function () {
    Route::get('/', fn() => \Auth::roles() )->name('tenant.index');
    
    Route::get('/register', [App\Http\Controllers\Tenant\AuthController::class, 'register'])->name('tenant.register');

    
    //Keycloak Auth routes
    Route::get('/login', [App\Http\Controllers\Tenant\AuthController::class, 'login'])->name('tenant.login');
    Route::get('/logout', [App\Http\Controllers\Tenant\AuthController::class, 'logout'])->name('tenant.logout');
    Route::get('/callback', [App\Http\Controllers\Tenant\AuthController::class, 'callback'])->name('tenant.callback');
    // Protected routes
    Route::middleware('keycloak-web')->group(function(){
        Route::get('/admin', fn() => 'Inside Tenant Admin' )->name('tenant.admin');
    });
});
