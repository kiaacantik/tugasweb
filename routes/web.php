<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FileController;


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
    return view('home');
});

Route::get('/upload', [FileController::class, 'showForm']);
Route::post('/upload', [FileController::class, 'upload'])->name('upload');

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

// Diatas adalah contoh asessment teori
// Route::get('/', function () {
//     return view('home');
// });

//Route::get('/', 'HomeController@index');

// //membuat form register
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);

//Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
//Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');

// routes/web.php


// Route::get('/mahasiswa', function () {
//     $arrMahasiswa = ["Risa Lestari", "Rudi Hermawan", "Bambang Kusumo", "Lisa Permata"];
//     return response()->json(['mahasiswa' => $arrMahasiswa]);
// })->name('mahasiswa');

// Route::get('/dosen', function () {
//     $arrDosen = ["Maya Fitrianti, M.M.", "Prof. Silvia Nst, M.Farm.", "Dr. Umar Agustinus", "Dr. Syahrial, M.Kom."];
//     return response()->json(['dosen' => $arrDosen]);
// })->name('dosen');

// Route::get('/exercise', function () {
//     $matkul00 = new \stdClass();
//     $matkul00->namaMatkul = "Sistem Operasi";
//     $matkul00->jumlahSks = 3;
//     $matkul00->semester = 3;

//     $matkul01 = new \stdClass();
//     $matkul01->namaMatkul = "Algoritma dan Pemrograman";
//     $matkul01->jumlahSks = 4;
//     $matkul01->semester = 1;

//     $matkul02 = new \stdClass();
//     $matkul02->namaMatkul = "Kalkulus Dasar";
//     $matkul02->jumlahSks = 2;
//     $matkul02->semester = 1;

//     $matkul03 = new \stdClass();
//     $matkul03->namaMatkul = "Basis Data";
//     $matkul03->jumlahSks = 2;
//     $matkul03->semester = 3;

//     $matkuls = collect([$matkul00, $matkul01, $matkul02, $matkul03]);

//     // 1. Tampilkan semua mata kuliah di semester 3
//     $matkulsSemester3 = $matkuls->where('semester', 3)->pluck('namaMatkul')->implode(', ');
//     echo "Nama mata kuliah di semester 3: $matkulsSemester3\n";

//     // 2. Urutkan mata kuliah berdasarkan jumlah sks
//     $sortedMatkuls = $matkuls->sortByDesc('jumlahSks');

//     // Tampilkan sebagai string
//     $matkulsString = $sortedMatkuls->map(function ($matkul) {
//         return "$matkul->namaMatkul ($matkul->jumlahSks)";
//     })->implode(', ');

//     echo "Nama mata kuliah: $matkulsString\n";
// });

// use App\Http\Controllers\DosenController;

// Route::resource('dosens', DosenController::class);
Route::get('/form', 'FormController@showForm');
Route::post('/form', 'FormController@processForm');