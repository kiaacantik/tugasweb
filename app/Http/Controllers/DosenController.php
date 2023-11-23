<?php

// app/Http/Controllers/DosenController.php
// namespace App\Http\Controllers;

// class DosenController extends Controller
// {
//     public function index()
//     {
//         $arrDosen = ["Maya Fitrianti, M.M.", "Prof. Silvia Nst, M.Farm.", "Dr. Umar Agustinus", "Dr. Syahrial, M.Kom."];
//         return view('dosen')->with('dosen', $arrDosen);
//     }
// }

// app/Http/Controllers/DosenController.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    // Other methods for CRUD operations...

    public function index()
    {
        $dosens = Dosen::all(); // Fetch all Dosen records from the database
        return view('dosens.tabel', compact('dosens'));
    }
}
