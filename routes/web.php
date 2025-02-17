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

Route::get('/', function () {
    return view('beranda');
})->name('beranda');
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');
Route::get('/produk', function () {
    return view('produk');
})->name('produk');
Route::get('/berita', function () {
    return view('berita');
})->name('berita');
Route::get('/detail-berita', function () {
    return view('detailBerita');
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
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/lupa-password', function () {
    return view('lupaPassword');
})->name('lupa-password');
Route::get('/otp-lupa-pw', function () {
    return view('otpLupaPw');
})->name('otp-lupa-pw');
Route::get('/pw-baru', function () {
    return view('pwBaru');
})->name('pw-baru');
Route::get('/otp-register', function () {
    return view('otpRegis');
})->name('otp-register');
Route::get('/pw-baru-register', function () {
    return view('pwBaruRegis');
})->name('pw-baru-register');
