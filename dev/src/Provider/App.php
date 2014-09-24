<?php

namespace Dev\Provider;

class App extends \Encore\Container\ServiceProvider
{
    public function register()
    {
        // Register dev services here
    }
    
    /*
    |--------------------------------------------------------------------------
    | Register Commands
    |--------------------------------------------------------------------------
    |
    | Here you can register commands which you can run on the console.
    | Commands can be used to help you out with all sorts of things
    | including compiling, debugging and more.
    |
    */

    public function commands()
    {
        return [
            'Dev\Console\Hi'
        ];
    }
}
