<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use GuzzleHttp\Client;
class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function register()
    {
        return view('register');
    }

    public function contact()
    {
        return view('contact');
    }
}


//*************************************************************************************** */
// Get realm public key
// http://base_url/realms/{realm_id}   - GET request
// Return JSON data
// Example: 
// {
//     "realm":"60b6fce3-c13wef2-4976d-9ae4-bde2cbb1111ad31",
//     "public_key":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAm/bojiALp276gcsCPagltU5X3cj+jL06ATBlBMEGqaXk5VZtan9tfQ46gjiJv1rnpO29LDQajtQ42
//     ZF7F1Fk/zTjrqUuAQzM13GP3We8ptHUCRlgSRB2mM15WNY8NLxx1wFCJgQQTGqMm6G0fO+ozg02HrV6hWfoKiuB34QRWspkr8AHwaULVlW4UFx5Kp7YGwTnKcii+Jg+QPINOe/G
//     mYt19F42MfLB19WXaT2u2V6emwFuRgv9GG7yCRArZ2DrAmju0wl9lRoEbHVoiYqPFycVIwEBnCGN+E1C+anx9sywT+8wxmdmCA04Y0MDVj033N38/K0kBfpJjGXE120cVQIDAQAB",
//     "token-service":"http://localhost:8080/realms/60b6fce3-c13wef2-4976d-9ae4-bde2cbb1111ad31/protocol/openid-connect",
//     "account-service":"http://localhost:8080/realms/60b6fce3-c13wef2-4976d-9ae4-bde2cbb1111ad31/account",
//     "tokens-not-before":0
// }