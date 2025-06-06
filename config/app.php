<?php

return [

    'name' => env('APP_NAME', 'LionPanel'),
    'logo' => env('APP_LOGO'),
    'favicon' => env('APP_FAVICON', '/lionpanel.ico'),

    'version' => 'canary',

    'timezone' => 'UTC',

    'installed' => env('APP_INSTALLED', true),

    'exceptions' => [
        'report_all' => env('APP_REPORT_ALL_EXCEPTIONS', false),
    ],

];
