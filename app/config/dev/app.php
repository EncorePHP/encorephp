<?php

return [
    'providers' => [
        // Application service providers
        'App\Provider\Console',

        // Core service providers
        'Encore\Console\ServiceProvider',
        'Encore\Development\ServiceProvider',
        'Encore\REPL\ServiceProvider',
        'Encore\Compiler\ServiceProvider',
        'Encore\Testing\ServiceProvider',
    ],

    'aliases' => [
        'Console' => 'Encore\Console\Proxy'
    ]
];