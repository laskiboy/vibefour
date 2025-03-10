<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\TncController;
use App\Http\Controllers\VerificationController;

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

Route::get('locale/{locale}', function ($locale) {
    app()->setlocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');


// Route::get('/', function () {
//     return view('beranda');
// })->name('beranda');
Route::get('/', [ContactController::class, 'home'])->name('beranda'); // Halaman login



Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/kontak', [ContactController::class, 'index'])->name('kontak'); // Halaman login



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

Route::get('/tnc', [TncController::class, 'index'])->name('tnc'); // Halaman login

// Route::get('/tnc', function () {
//     return view('tnc');
// })->name('tnc');


Route::get('/privasi', function () {
    return view('privacy');
})->name('privasi');


// Route::get('/faq', function () {
//     return view('faq');
// })->name('faq');
Route::get('/faq', [FaqController::class, 'index'])->name('faq'); // Halaman login

// Route::get('/header', [HeaderController::class, 'index'])->name('header'); // Halaman login


Route::get('/oi', function () {
    return view('Untitled-1');
})->name('oi')->middleware('auth');
// Route::get('/oi', [HomeController::class, 'index'])->name('beranda')->middleware('auth');


//login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // Halaman login

Route::post('/login', [AuthController::class, 'login']); // Proses login

//Buat password baru
Route::get('/pw-baru-register', function () {
    return view('Auth.pwBaruRegis');
})->name('pw-baru-register');

Route::post('/pw-baru-register', [AuthController::class, 'buat_password'])->name('pw.register.proses')->middleware('web');

Route::post('/validate-password', [AuthController::class, 'validatePassword']);


// Proses registrasi
Route::get('/register', function () {
    return view('Auth.login');
})->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register.process');

Route::post('/check-username', [AuthController::class, 'checkUsername'])->name('check.username');

Route::post('/check-email', [AuthController::class, 'checkEmail'])->name('check.email');


// Halaman verifikasi OTP
Route::get('/verify-otp', function () {
    return view('Auth.otpRegis');
})->name('verify.otp.view');


// Proses verifikasi OTP
Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('verify.otp');

Route::post('/verify-otp-baru', [AuthController::class, 'verifyOtpBaru'])->name('verify.otp.baru');

Route::get('/resend-otp', [AuthController::class, 'resendOtp'])->name('resend.otp');

Route::get('/resend-otp-baru', [AuthController::class, 'resendOtpBaru'])->name('resend.otp.baru');

//Kirim email lupa password
Route::get('/lupa-password', function () {
    return view('auth.lupaPassword'); // Perhatikan huruf kecil untuk folder
})->name('lupa-password');

Route::post('/lupa-password', [AuthController::class, 'konfirm_email'])->name('lupa-password-proses');


Route::get('/pw-baru', function () {
    return view('Auth.pwBaru');
})->name('pw-baru');

Route::post('/pw-baru', [AuthController::class, 'buat_password_baru'])->name('pw.baru.proses');


Route::get('/otp-lupa-pw', function () {
    return view('Auth.otpLupaPw');
})->name('otp-lupa-pw');



Route::get('/otp-register', function () {
    return view('Auth.otpRegis');
})->name('otp-register');

// Route::get('/pw-baru-register', function () {
//     return view('Auth.pwBaruRegis');
// })->name('pw-baru-register');

Route::get('/y', function () {
    return view('Untitled-1');
});


Route::get('/events', [EventController::class, 'getEvents']);
