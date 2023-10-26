<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Clients\SupabaseClient;


class SupabaseController extends Controller
{
    public function getDataFromSupabase()
    {
        // Buat instance klien Supabase
        $supabase = new SupabaseClient();

        // Lakukan permintaan untuk mendapatkan data dari Supabase
        $dataFromSupabase  = $supabase->get('/Collaboration Note');

        // Lakukan sesuatu dengan data yang diterima
        return view('index', ['data' => $dataFromSupabase]);
    }
    //
}
