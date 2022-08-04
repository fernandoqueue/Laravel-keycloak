<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Facades\KeycloakWeb;
use App\Exceptions\KeycloakCallbackException;
use Redirect;
use Auth;

class AuthController extends Controller
{
    public function login ()
    {
        $url = KeycloakWeb::getLoginUrl();
        KeycloakWeb::saveState();

        return redirect($url);
    }

    public function logout()
    {
        if(!Auth::check()){
            return Redirect::route('tenant.index');
        }
        $url = KeycloakWeb::getLogoutUrl();
        KeycloakWeb::forgetToken();
        return redirect($url);
    }

    public function register()
    {
        return tenancy()->initialized;
    }

    public function callback(Request $request)
    {
                // Check for errors from Keycloak
                if (! empty($request->input('error'))) {
                    $error = $request->input('error_description');
                    $error = ($error) ?: $request->input('error');
        
                    throw new KeycloakCallbackException($error);
                }
        
                // Check given state to mitigate CSRF attack
                $state = $request->input('state');
                if (empty($state) || ! KeycloakWeb::validateState($state)) {
                    KeycloakWeb::forgetState();
        
                    throw new KeycloakCallbackException('Invalid state');
                }
        
                // Change code for token
                $code = $request->input('code');
                if (! empty($code)) {
                    $token = KeycloakWeb::getAccessToken($code);
                    if (Auth::validate($token)) {
                        $url = tenant()->route('tenant.admin');;
                        return redirect()->intended($url);
                    }
                }
        
                return redirect(route('tenant.login'));
    }
}
