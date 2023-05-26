<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

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

route::get('/welcome', function () {
    echo "Selamat Datang di Laravel";
});

route::get('/greeting', function () {
    return view('greeting');
});


route::get('/mobil', [MobilController::class, 'index']);
route::get('/mobil/create', [MobilController::class, 'create']);
route::post('/mobil/simpanData', [MobilController::class, 'store']);

route::get('/merk', [MerkController::class, 'index']);
