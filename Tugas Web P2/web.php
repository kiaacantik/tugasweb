<?php

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

// parameter sederhana 
Route::get('/Home', function () {
    return 'Kia doang dan teman-teman';
});

Route::get('/About', function () {
    return 'Ini adalah halaman About';
});

Route::get('/Program', function () {
    return 'Ini adalah halaman Program';
});

Route::get('/Our Team', function () {
    return 'Ini adalah tim kami : Kia,Lulu,Wava';
});

Route::get('/Contact Us', function () {
    return 'Silahkan hubungi kami 087895011043';
});

Route::get('nama_teman/{namadepan?}/{namabelakang?}',function($a='cantik',$b='imut'){
    echo "ini adalah teman teman saya $a $b";
});