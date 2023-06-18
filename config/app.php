<?php

return [
    'db' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'movie'

    ],
    'view' => [
        'template_path' => APP_ROOT . '/views/',
        'layout_path' => APP_ROOT . '/views/',
    ],
    'session' => [
        'name' => SESSION_NAME,
        'secret' => SESSION_SECRET,
        'lifetime' => SESSION_LIFETIME,
    ],
    'auth' => [
        'providers' => [
            'users' => [
                'driver' => 'eloquent',
                'model' => App\Models\User,
            ],
            'admins' => [
                'driver' => 'eloquent',
                'model' => App\Models\Admin,

            ]
        ]
    ]

];