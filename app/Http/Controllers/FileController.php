<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    // Ganti nama metode
public function upload(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:jpg,png,pdf|max:2048',
    ]);

    // ...
}
}
// Atau gunakan namespace penuh
// public function upload(\Illuminate\Http\Request $request)
// {
//     $request->validate([
//         'file' => 'required|mimes:jpg,png,pdf|max:2048',
//     ]);

//     // ...
// }


