<?php

namespace App\Providers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ThemeProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $theme = (object) [
            "name" => "Solar",
            "url" => asset('css/bootstrap.min.css')
        ];

        if (Cookie::has('theme')) {
            $theme = json_decode(Cookie::get('theme'));
        }

        View::share('theme', $theme);
    }
}
