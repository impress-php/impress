<?php

/**
 * @see http://php.net/session.configuration
 * @see Impress\Framework\Http\Session\Session::__construct
 */

return [
    'name' => 'SID',
    'cookie_path' => '/',
    'cookie_domain' => '',
    'cookie_lifetime' => '0',
    'gc_maxlifetime' => env('SESSION_DEFAULT_EXPIRE', 86400)
];
