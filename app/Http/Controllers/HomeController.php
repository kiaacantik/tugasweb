<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    public function index()
    {
        // Logika untuk halaman utama (index) aplikasi web
        return view('home'); // Menampilkan view 'home.blade.php'
    }
}
