<?php

return [
    'config' => [
        'appId' => env('INSTAGRAM_APP_ID', null),
        'appSecret' => env('INSTAGRAM_APP_SECRET', null),
        'redirectUri' => env('INSTAGRAM_DEFAULT_CALLBACK_URL')
    ],
];
