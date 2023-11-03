<?php

namespace App\Utils;

use GuzzleHttp\Client;

class Supabase
{
    protected $selectedColumns;
    private $apiKey;
    private $client;
    protected $table;
    protected $baseUrl;

    public function __construct($baseUrl, $apiKey)
    {
        $this->baseUrl = $baseUrl;
        $this->apiKey = $apiKey;
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
    public function from($table)
    {
        $this->table = $table;
        return $this;
    }

    public function select($columns)
    {
    $this->selectedColumns = $columns; // Simpan daftar kolom yang dipilih
    return $this;
    }

    public function execute()
    {
        // Implementasi metode execute() akan mengirimkan permintaan HTTP sesuai dengan data yang telah ditentukan
        $url = $this->baseUrl . '/rest/v1/' . $this->table;
        
        // Buat permintaan HTTP menggunakan Guzzle atau klien HTTP lainnya
        $client = new Client();

        $response = $client->request('GET', $url, [
            'headers' => [
                'apikey' => $this->apiKey,
                'Content-Type' => 'application/json',
            ],
        ]);

        // Anda dapat memproses respons dan mengembalikan data yang diambil dari Supabase
        $data = json_decode($response->getBody(), true);
        return $data;
    }
    // Tambahkan metode lain yang Anda perlukan di sini.
}