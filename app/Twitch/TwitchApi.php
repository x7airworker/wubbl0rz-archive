<?php
namespace App\Twitch;


use App\Twitch\Api\ChannelApi;
use GuzzleHttp\Client;

class TwitchApi
{
    public $baseUrl = "https://api.twitch.tv/helix";

    public $guzzle;
    public $clientId;
    public $accessToken;

    /**
     * @var ChannelApi
     */
    private $channelApi;

    /**
     * TwitchApi constructor.
     * @param $guzzle Client
     * @param $clientId string
     * @param $accessToken string
     */
    public function __construct(Client $guzzle, string $clientId, string $accessToken)
    {
        $this->guzzle = $guzzle;
        $this->clientId = $clientId;
        $this->accessToken = $accessToken;
    }

    public function channels() {
        if ($this->channelApi == null)
            $this->channelApi = new ChannelApi($this);
        return $this->channelApi;
    }
}
