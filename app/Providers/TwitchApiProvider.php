<?php

namespace App\Providers;

use App\Twitch\TwitchApi;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class TwitchApiProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TwitchApi::class, function()
        {
            $guzzle = $this->app->make(Client::class);
            $clientId = config('app.twitch_client_id');
            $accessToken = config('app.twitch_access_token');

            return new TwitchApi($guzzle, $clientId, $accessToken);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
