<?php
namespace App\Twitch\Api;


use App\Twitch\TwitchApi;

class Api
{
    /**
     * @var TwitchApi
     */
    protected $twitchApi;

    /**
     * Api constructor.
     * @param $twitchApi TwitchApi
     */
    protected function __construct(TwitchApi $twitchApi)
    {
        $this->twitchApi = $twitchApi;
    }

    protected function get($url, $model, $options = []) {
        $response = $this->twitchApi->guzzle->get($this->twitchApi->baseUrl . $url, array_merge([
            "headers" => [
                "Authorization" => "Bearer " . $this->twitchApi->accessToken,
                "Client-Id" => $this->twitchApi->clientId
            ]
        ], $options));

        $body = $response->getBody()->getContents();
        $stdobj = json_decode($body);
        $temp = serialize($stdobj);
        $temp = preg_replace('@^O:8:"stdClass":@','O:7:"' . $model .'":',$temp);
        return unserialize($temp);
    }
}
