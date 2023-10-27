<?php

namespace App\Utils;

use GuzzleHttp\Client;

class Supabase
{
    private $url;
    private $apiKey;
    private $client;

    public function __construct($url, $apiKey)
    {
        $this->url = $url;
        $this->apiKey = $apiKey;
        $this->client = new Client(['base_uri' => $this->url]);
    }

    public function getData($table)
    {
        $response = $this->client->request('GET', '/rest/v1/' . $table, [
            'headers' => [
                'apikey' => $this->apiKey,
                'Content-Type' => 'application/json',
            ],
        ]);

        return json_decode($response->getBody(), true);
    }

    // Tambahkan metode lain yang Anda perlukan di sini.
}