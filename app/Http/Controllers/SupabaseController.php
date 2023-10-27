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
        dd($data);
        return view('index', compact($data));
    }

    // Tambahkan fungsi lain yang Anda butuhkan di sini.
}
