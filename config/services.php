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

    'open_weather' => [
        'appid' => env('OPEN_WEATHER_API_KEY', ''),
        'cnt' => env('OPEN_WEATHER_MAX_OUTPUT', '5'),
        'units' => env('OPEN_WEATHER_UNIT', 'metric'),
        'lang' => env('OPEN_WEATHER_LANG', 'en'),
        'uri' => env('OPEN_WEATHER_API_URI', 'https://api.openweathermap.org/data/2.5'),
    ],
    'geoapify' => [
        'filter' => env('GEOAPIFY_FILTER', 'countrycode:jp'),
        'format' => env('GEOAPIFY_FORMAT', 'json'),
        'key' => env('GEOAPIFY_API_KEY', ''),
        'lang' => env('GEOAPIFY_LANG', 'en'),
        'limit' => env('GEOAPIFY_MAX_OUTPUT', '1'),
        'type' => env('GEOAPIFY_TYPE', 'city'),
        'uri' => env('GEOAPIFY_API_URI', 'https://api.geoapify.com/v1/geocode/search'),
        'default_search' => env('GEOAPIFY_DEFAULT', 'Tokyo, Japan'),
    ],
    'google_map' => [
        'key' => env('GOOGLE_MAP_API_KEY', ''),
    ],

];
