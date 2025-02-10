<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Penilaian;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'sekolah' => 'required|string',
            'kerapihan' => 'required|integer',
            'kesesuaian_simpul' => 'required|integer',
            'ketepatan_simpul' => 'required|integer',
            'kekuatan' => 'required|integer',
            'waktu_pembuatan' => 'required|string',
        ]);

        Penilaian::create([
            'sekolah' => $request->sekolah,
            'kerapihan' => $request->kerapihan,
            'kesesuaian_simpul' => $request->kesesuaian_simpul,
            'ketepatan_simpul' => $request->ketepatan_simpul,
            'kekuatan' => $request->kekuatan,
            'waktu_pembuatan' => $request->waktu_pembuatan,
        ]);

        return response()->json(['message' => 'Data berhasil disimpan']);
    }
}

