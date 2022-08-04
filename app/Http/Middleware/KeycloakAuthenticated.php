<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate;

class KeycloakAuthenticated extends Authenticate
{
    /**
     * Redirect user if it's not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        return route('tenant.login');
    }
}
