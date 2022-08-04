<?php

return [
    /**
     * Keycloak Url
     *
     * Generally https://your-server.com/auth
     */
    'base_url' => env('KEYCLOAK_BASE_URL', 'http://localhost:8080/'),

    'master_realm' => env('KEYCLOAK_MASTER_REALM', 'master'),
    'master_realm_username' => env('KEYCLOAK_MASTER_REALM_USERNAME', 'admin'),
    'master_realm_password' => env('KEYCLOAK_MASTER_REALM_PASSWORD', 'password'),

    /**
     * The Keycloak Server realm public key (string).
     *
     * @see Keycloak >> Realm Settings >> Keys >> RS256 >> Public Key
     */
    'realm_public_key' => env('KEYCLOAK_REALM_PUBLIC_KEY', null),
    /**
     * Keycloak Client ID
     *
     * @see Keycloak >> Clients >> Installation
     */
    'client_id' => env('KEYCLOAK_CLIENT_ID', 'mytenant-1'),

    /**
     * Keycloak Client Secret
     *
     * @see Keycloak >> Clients >> Installation
     */
    'client_secret' => env('KEYCLOAK_CLIENT_SECRET', null),

    /**
     * We can cache the OpenId Configuration
     * The result from /realms/{realm-name}/.well-known/openid-configuration
     *
     * @link https://www.keycloak.org/docs/3.2/securing_apps/topics/oidc/oidc-generic.html
     */
    'cache_openid' => env('KEYCLOAK_CACHE_OPENID', false),

    /**
     * The routes for authenticate
     *
     * Accept a string as the first parameter of route() or false to disable the route.
     *
     * The routes will receive the name "keycloak.{route}" and login/callback are required.
     * So, if you make it false, you shoul register a named 'keycloak.login' route and extend
     * the Vizir\KeycloakWebGuard\Controllers\AuthController controller.
     */
    'routes' => [
        'login' => 'login',
        'logout' => 'logout',
        'register' => 'register',
        'callback' => 'callback',
    ],

    /**
    * GuzzleHttp Client options
    *
    * @link http://docs.guzzlephp.org/en/stable/request-options.html
    */
   'guzzle_options' => [
    ['base_uri' => env('KEYCLOAK_BASE_URL', null)]
   ],
];
