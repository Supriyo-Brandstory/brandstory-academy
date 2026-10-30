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

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'recaptcha' => [
        'site_key' => env('RECAPTCHA_SITE_KEY'),
        'secret_key' => env('RECAPTCHA_SECRET_KEY'),
    ],

    'monday' => [
        'api_token' => env('MONDAY_API_TOKEN', 'eyJhbGciOiJIUzI1NiJ9.eyJ0aWQiOjcxNjk4ODUyMCwiYWFpIjoxMSwidWlkIjo3ODE2NDU5OCwiaWFkIjoiMjAyNi0xMC0yM1QwNjozMjoxMS4wMDBaIiwicGVyIjoibWU6d3JpdGUiLCJhY3RpZCI6MzAzMTc0NjksInJnbiI6ImFwc2UyIn0.mocTgX7fDQj4B7h_6_HzYj2jS5pvXE3KvWQjhabiS9c'),
        'board_id' => env('MONDAY_BOARD_ID', '5026862618'),
        'group_id' => env('MONDAY_GROUP_ID', 'group_mm1474yh'),
    ],

];
