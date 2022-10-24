<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],
    'stripe' => [
        'secret' => env('STRIPE_SECRET'),
    ],
    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '608028889420-fl04a28j8qdrsp40j0hgroldf42nof74.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'https://banprotest.herokuapp.com/callback/google',
    ],

    'facebook' => [
        'client_id' => '1212104939332732',
        'client_secret' => '9430edc7bacf86d00bd9316ab2fba304',
        'redirect' => 'http://127.0.0.1:8000/callback/facebook',
    ],

];
