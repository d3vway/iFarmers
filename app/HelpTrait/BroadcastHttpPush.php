<?php

namespace App\HelpTrait;

use GuzzleHttp\Client;

trait BroadcastHttpPush
{
    public function push($data)
    {
        $baseUrl = env('WEBSOCKET_BASEURL', 'http://localhost:6001/');
        $appId = env('WEBSOCKET_APPID', '4aa725f011d1f647');
        $key = env('WEBSOCKET_KEY', '412fd12939b315d813561066388a1f8b');
        $httpUrl = $baseUrl . 'apps/' . $appId . '/events?auth_key=' . $key;
      
        $client = new Client([
            'base_uri' => $httpUrl,
            'timeout' => 2.0,
        ]);
        $response = $client->post($httpUrl, [
            'json' => $data
        ]);
        $code = $response->getStatusCode();
    }
}