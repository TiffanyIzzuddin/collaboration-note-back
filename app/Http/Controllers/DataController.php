<?php

namespace App\Http\Controllers;
use App\Models\data;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DataController extends Controller
{
    public function push(Request $request){
        data::create([
            'title' => $request->title,
            'text' => $request->text,
            'link' => Str::random(10),
        ]);
    }
}
