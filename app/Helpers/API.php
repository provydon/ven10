<?php
namespace App\Helpers;

use Exception;
use GuzzleHttp\Client;

class API
{
    public static function get(string $URI)
    {
        $client = new Client();
        $response = $client->get($URI);
        $res = $response->getBody()->getContents();
        $res = json_decode($res);
        return $res;
    }

}
