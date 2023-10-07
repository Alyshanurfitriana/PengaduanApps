<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasyarakatControll;

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

Route::get('item', function () {
    return view('file1');
});

Route::get('/', function () {
    return view('login');
});


// Data masyarakat
Route::get('masyarakat/registrasi',[MasyarakatControll::class,'registrasi']);

Route::post('masyarakat/simpan',[MasyarakatControll::class,'simpan']);

Route::get('masyarakat/login',[MasyarakatControll::class,'login']);

Route::post('masyarakat/login',[MasyarakatControll::class,'cekLogin']);

Route::get('masyarakat/laporan',[MasyarakatControll::class,'laporan']);
Route::post('masyarakat/laporan',[MasyarakatControll::class,'cekLaporan']);

Route::get('masyarakat/dashboard',[MasyarakatControll::class,'dashboard']);

Route::get('masyarakat/validasi',[MasyarakatControll::class,'validasi']);
Route::post('masyarakat/validasi',[MasyarakatControll::class,'cekValidasi']);

Route::get('/');