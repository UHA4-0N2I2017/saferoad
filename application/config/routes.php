<?php

return [
    'GET' => [
        '/' => "home#index",
        '/error' => "error#index",
        '/warning' => "warning#index",
        '/alerts' => "alerts#index",
        '/personal' => "alerts#personal"
    ],
    'POST' => [
        '/api/geocode' => "alerts#geocode"
    ]
];


