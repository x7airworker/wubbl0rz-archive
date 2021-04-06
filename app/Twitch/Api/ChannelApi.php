<?php
namespace App\Twitch\Api;


use App\Twitch\Model\Channel;
use App\Twitch\TwitchApi;

class ChannelApi extends Api
{
    public function __construct(TwitchApi $twitchApi)
    {
        parent::__construct($twitchApi);
    }

    /**
     * @param $query string URl encoded search query
     * @param $live_only bool Filter results for live streams only.
     * @param int $first int Maximum number of objects to return.
     * @param string $after int Cursor for forward pagination: tells the server where to start fetching the next set of results, in a multi-page response. The cursor value specified here is from the pagination response field of a prior query.
     * @return Channel[]
     */
    public function searchChannels(string $query, bool $live_only = false, int $first = 20, string $after = ""): array {
        $response = $this->get("/search/channels", Channel::class, [
            "query" => ["live_only" => $live_only, "first" => $first, "after" => $after]
        ]);
    }
}
