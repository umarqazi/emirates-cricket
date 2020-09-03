<?php

return [
    'config' => [
        'CONSUMER_KEY' => env('TWITTER_CONSUMER_KEY', null),
        'CONSUMER_SECRET' => env('TWITTER_CONSUMER_SECRET', null),
        'OAUTH_CALLBACK' => env('TWITTER_OAUTH_CALLBACK')
    ],
];
