<?php
return [

    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'responsables' => [ // Gardien pour les responsables
            'driver' => 'session',
            'provider' => 'responsables',
        ],

        'enseignants' =>[
            'driver' => 'session',
            'provider' => 'enseignants',
        ],

        'membre__administrations' =>[
            'driver' => 'session',
            'provider' => 'membre__administrations',
        ]
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL', App\Models\User::class),
        ],

        'responsables' => [ // Fournisseur pour les responsables
            'driver' => 'eloquent',
            'model' => App\Models\Responsable::class,
        ],

        'enseignants' => [
            'driver' => 'eloquent',
            'model' => App\Models\Enseignant::class,
        ],

        'membre__administrations' => [
            'driver' => 'eloquent',
            'model' => App\Models\Membre_Administration::class,
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),
];
