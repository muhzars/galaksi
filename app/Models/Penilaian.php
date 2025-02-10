<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    protected $fillable = [
        'sekolah', 'kerapihan', 'kesesuaian_simpul', 'ketepatan_simpul', 'kekuatan', 'waktu_pembuatan'
    ];
}
