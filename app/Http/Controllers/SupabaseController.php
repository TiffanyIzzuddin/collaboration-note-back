<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Clients\SupabaseClient;


class SupabaseController extends Controller
{
    public function getDataFromSupabase()
    {
<<<<<<< HEAD
        $supabase = new Supabase('https://emjzqwzrslcmwtefrffi.supabase.co', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImVtanpxd3pyc2xjbXd0ZWZyZmZpIiwicm9sZSI6ImFub24iLCJpYXQiOjE2OTgzMjY0OTEsImV4cCI6MjAxMzkwMjQ5MX0.HvyAmsJFGwhaMaB-d0jBIf-07lNM6IiulKPPSrhl1sE');
        $data = $supabase->getData('worksheet');
        
        return view('index', compact('data'));
    }

    public function getData()
    {
        $supabaseUrl = 'https://emjzqwzrslcmwtefrffi.supabase.co';
        $supabaseApiKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImVtanpxd3pyc2xjbXd0ZWZyZmZpIiwicm9sZSI6ImFub24iLCJpYXQiOjE2OTgzMjY0OTEsImV4cCI6MjAxMzkwMjQ5MX0.HvyAmsJFGwhaMaB-d0jBIf-07lNM6IiulKPPSrhl1sE';

        $supabase = new Supabase($supabaseUrl, $supabaseApiKey);

        $response = $supabase->from('worksheet')->select('*')->execute();

        if ($response->error) {
            // Penanganan kesalahan
            return 'error';
        } else {
            $data = $response->data;
            // Proses data
            return view('index','data');
        }
    }
    // Tambahkan fungsi lain yang Anda butuhkan di sini.
=======
        // Buat instance klien Supabase
        $supabase = new SupabaseClient();

        // Lakukan permintaan untuk mendapatkan data dari Supabase
        $dataFromSupabase  = $supabase->get('/Collaboration Note');

        // Lakukan sesuatu dengan data yang diterima
        return view('index', ['data' => $dataFromSupabase]);
    }
    //
>>>>>>> parent of 5969e96 (- update cilik)
}
