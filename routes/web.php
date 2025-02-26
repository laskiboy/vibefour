<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;

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
    return view('beranda');
})->name('beranda');


Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');


Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');


//produk
Route::get('/produk-voting', function () {
    return view('produk.produkVote');
})->name('produk-voting');

Route::get('/produk-penjadwalan', function () {
    return view('produk.produkPenjadwalan');
})->name('produk-penjadwalan');


//berita
Route::get('/berita', function () {
    return view('berita.berita');
})->name('berita');

Route::get('/detail-berita', function () {
    return view('berita.detailBerita');
})->name('detail-berita');


Route::get('/tnc', function () {
    return view('tnc');
})->name('tnc');


Route::get('/privasi', function () {
    return view('privacy');
})->name('privasi');


Route::get('/faq', function () {
    return view('faq');
})->name('faq');


//login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // Halaman login
Route::post('/login', [AuthController::class, 'login']); // Proses login

//regis
Route::get('/register', [AuthController::class, 'showRegisForm'])->name('register'); // Halaman register
Route::post('/register', [AuthController::class, 'register'])->name('regis'); // Proses register
Route::post('/check-username', [AuthController::class, 'checkUsername'])->name('check.username');
Route::post('/check-email', [AuthController::class, 'checkEmail'])->name('check.email');


Route::get('/lupa-password', function () {
    return view('Auth.lupaPassword');
})->name('lupa-password');

Route::get('/otp-lupa-pw', function () {
    return view('Auth.otpLupaPw');
})->name('otp-lupa-pw');

Route::get('/pw-baru', function () {
    return view('Auth.pwBaru');
})->name('pw-baru');

Route::get('/otp-register', function () {
    return view('Auth.otpRegis');
})->name('otp-register');

Route::get('/pw-baru-register', function () {
    return view('Auth.pwBaruRegis');
})->name('pw-baru-register');

Route::get('/y', function () {
    return view('Untitled-1');
});


Route::get('/events', [EventController::class, 'getEvents']);
