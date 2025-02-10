<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});
Route::get('/login', function () {
    return view('login');
})->name('login');

use App\Http\Controllers\PenilaianController;

Route::post('/penilaian', [PenilaianController::class, 'store']);


// developer mode
Route::get('/home', function () {
    return view('home');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/form', function () {
    return view('form'); // Pastikan file form.blade.php ada di resources/views/
})->name('form');

Route::get('/peserta', function () {
    return view('peserta');
});

Route::get('/hasil', function () {
    return view('hasil');
});

Route::get('/admin_pp', function () {
    return view('admin_pp');
});

Route::get('/hasil', function () {
    return view('hasil'); // Pastikan file hasil.blade.php ada di folder resources/views/
})->name('hasil');