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
/*
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

Route::get('/data/{id}', function ($id) {
    // Memeriksa apakah ID sesuai dengan pola tertentu
    if (preg_match('/^(A1123adc|B3456ef|D1234regdf)$/', $id)) {
        // Jika ID sesuai dengan pola, lakukan sesuatu
        return "Data dengan ID $id telah ditemukan dari hani.";
    } else {
        // Jika ID tidak sesuai dengan pola, tampilkan pesan kesalahan
        return "ID tidak valid.";
    }
})->where('id', '^(A1123adc|B3456ef|D1234regdf)$');

Route::get('/data', function () {
    $data = [
        ["nama" => "Adi Setiawan", "nim" => "SI-20210023", "prodi" => "Sistem Informasi"],
        ["nama" => "Budi Kurniawan", "nim" => "CS-20210034", "prodi" => "Ilmu Komputer"],
        ["nama" => "Chandra Djaya", "nim" => "M-20200045", "prodi" => "Manajemen"],
        ["nama" => "Derry Hutama", "nim" => "CS-20210012", "prodi" => "Ilmu Komputer"],
        ["nama" => "Eko Purnama", "nim" => "SI-20210044", "prodi" => "Sistem Informasi"],
    ];

    return view('data', compact('data'));
});
*/
// Diatas adalah contoh asessment teori
Route::get('/', function () {
    return view('home');
});

//Route::get('/', 'HomeController@index');

//membuat form register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);