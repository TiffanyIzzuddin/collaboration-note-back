<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\SupabaseController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', [DataController::class, 'push']);

<<<<<<< HEAD
Route::get('/getdata', [SupabaseController::class,'getData']);
=======
Route::get('/get-data', [SupabaseController::class,'getDataFromSupabase']);
>>>>>>> parent of 5969e96 (- update cilik)

