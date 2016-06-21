<?php
return [
    'mysql' => [
        'master' => [
            'host' => '127.0.0.1',
            'port' => '3306',
            'database' => 'impress',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ],
    ],

    'redis' => [
        'default' => [
            'host' => '127.0.0.1',
            'port' => 6379,
            'timeout' => 0,
            'auth' => '',
            'database' => 0,
            'options' => [
                Redis::OPT_PREFIX => 'ip_',
                Redis::OPT_READ_TIMEOUT => 1,
                Redis::OPT_SERIALIZER => Redis::SERIALIZER_PHP
            ]
        ],
    ],

    'memcached' => [
        'default' => [
            'servers' => [
                ['127.0.0.1', 11211, 1]
            ],
            'options' => [
                Memcached::OPT_PREFIX_KEY => 'ip_',
                Memcached::OPT_CONNECT_TIMEOUT => 1,
                Memcached::OPT_RECV_TIMEOUT => 1,
                Memcached::OPT_SEND_TIMEOUT => 2,
                Memcached::OPT_DISTRIBUTION => Memcached::DISTRIBUTION_CONSISTENT,
                Memcached::OPT_LIBKETAMA_COMPATIBLE => true
            ]
        ]
    ]
];
