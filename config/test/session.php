<?php

/**
 * @see http://php.net/session.configuration
 * @see Impress\Framework\Http\Session\Session::__construct
 */

return [
    'default' => [
        'options' => [
            'name' => 'SID',
            'cookie_path' => '/',
            'cookie_domain' => env("COOKIE_DOMAIN"),
            'cookie_lifetime' => 0,
            'gc_maxlifetime' => 86400,
            'cookie_httponly' => true,
            'cookie_secure' => 0
        ],
        'handler' => [
            'prefix' => 'sid_',
            'expiretime' => 86400
        ]
    ],

    'long' => [
        'options' => [
            'name' => 'SID',
            'cookie_path' => '/',
            'cookie_domain' => env("COOKIE_DOMAIN"),
            'cookie_lifetime' => 86400,
            'gc_maxlifetime' => 86400,
            'cookie_httponly' => true,
            'cookie_secure' => 0
        ],
        'handler' => [
            'prefix' => 'sid_',
            'expiretime' => 86400
        ]
    ]
];
