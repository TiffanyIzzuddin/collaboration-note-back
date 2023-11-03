<?php

namespace App\Http\Controllers;

use App\Utils\Supabase;
use Illuminate\Http\Request;


class SupabaseController extends Controller
{
    public function index()
    {
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
}
