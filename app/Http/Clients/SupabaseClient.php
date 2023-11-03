<?php
namespace App\Http\Clients;

use GuzzleHttp\Client;

class SupabaseClient
{
    protected $client;
    protected $supabaseUrl;
    protected $supabaseKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->supabaseUrl = config('supabase_url');
        $this->supabaseKey = config('supabase_key');
    }

    public function get($endpoint)
    {
        $response = $this->client->get($this->supabaseUrl . $endpoint, [
            'headers' => [
                'apikey' => $this->supabaseKey,
            ],
        ]);

        return json_decode($response->getBody());
    }



    // Anda dapat menambahkan metode lain untuk POST, PUT, DELETE, dll.
}
