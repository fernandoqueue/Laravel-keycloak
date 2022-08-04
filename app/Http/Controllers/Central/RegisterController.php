<?php

namespace App\Http\Controllers\Central;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Domain;
use App\Facades\KeycloakWeb;
use DB;
class RegisterController extends Controller
{
    public function create(Request $request)
    {
        $tenant = Tenant::create(['email' => $request->email]);
        $domain = $tenant->domains()->create(['domain' => $request->domain]);
        KeycloakWeb::getAccessTokenFromApi()->createRealm([
            'realm' => $tenant->id, 
            'name' => $request->team_name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'clientId' => $tenant->id . '-web',
        ]);

        return $tenant ? $tenant->id : 'f';
        
    }
}
