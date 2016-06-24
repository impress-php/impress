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
            'cookie_domain' => 'impress.com',
            'cookie_lifetime' => 0,
            'gc_maxlifetime' => 86400
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
            'cookie_domain' => 'impress.com',
            'cookie_lifetime' => 86400,
            'gc_maxlifetime' => 86400
        ],
        'handler' => [
            'prefix' => 'sid_',
            'expiretime' => 86400
        ]
    ]
];
