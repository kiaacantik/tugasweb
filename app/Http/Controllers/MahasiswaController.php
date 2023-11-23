<?php

// app/Http/Controllers/MahasiswaController.php
namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $arrMahasiswa = ["Risa Lestari", "Rudi Hermawan", "Bambang Kusumo", "Lisa Permata"];
        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }
}
