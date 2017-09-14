<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => '892127067620997',
        'client_secret' => 'e91de767db45304a9e2a1bb0029a2f00',
        'redirect' => 'http://localhost/blog/public/auth/facebook/callback',
    ],
    'google' => [
        'client_id' => '1072563521560-iktvgs9p3bh082vudkb57fl2k4n1cp0k.apps.googleusercontent.com',
        'client_secret' => 'hCX6duxVFfNSSbmNMRQ21jRU',
        'redirect' => 'http://localhost/blog/public/auth/google/callback',
    ],

];
