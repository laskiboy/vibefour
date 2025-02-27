<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'usernameAndEmail' => 'required',
            'password' => 'required',
        ]);

        // Cari user berdasarkan username atau email
        $user = User::where('username', $request->usernameAndEmail)
            ->orWhere('email', $request->usernameAndEmail)
            ->first();

        // Jika user ditemukan dan password cocok
        if ($user && Hash::check($request->password, $user->password)) {
            return response('success');
        } else {
            return response('<p style="color: red;">Username atau password salah!</p>', 401);
        }
    }


    // public function showRegisForm()
    // {
    //     return view('auth.login');
    // }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'nama' => 'required',
            'email' => 'required',
        ]);

        $request['role_id'] = 1;

        $user = User::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'email' => $request->email,
            'otp' => $otp = rand(100000, 999999),
            'otp_expires_at' => Carbon::now()->addMinutes(10),
        ]);

        Mail::raw("Kode OTP Anda adalah: $otp", function ($message) use ($user) {
            $message->to($user->email)->subject('Kode OTP Anda');
        });

        session(['email_verifikasi' => $user->email]);

        return redirect()->route('verify.otp.view')->with('success', 'Kode OTP telah dikirim ke email Anda.');
    }

    public function buat_password(Request $request)
    {
        $email = Session::get('email_verifikasi');

        $request->validate([
            'password' => 'required',
        ]);

        $user = User::where('email', $email)->first();

        if ($user) {
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route('login')->with('success', 'Password Anda telah berhasil dibuat.');
        } else {
            return redirect()->route('login')->with('error', 'Email Anda tidak ditemukan.');
        }


        // $request['role_id'] = 1;

        // $user = User::create([
        //     'username' => $request->username,
        //     'otp' => $otp = rand(100000, 999999),
        //     'otp_expires_at' => Carbon::now()->addMinutes(10),
        // ]);

        // Mail::raw("Kode OTP Anda adalah: $otp", function ($message) use ($user) {
        //     $message->to($user->email)->subject('Kode OTP Anda');
        // });

        // session(['email_verifikasi' => $user->email]);

        // return redirect()->route('verify.otp.view')->with('success', 'Kode OTP telah dikirim ke email Anda.');
    }

    public function checkUsername(Request $request)
    {
        $exists = User::where('username', $request->username)->exists();

        return response()->json([
            'exists' => $exists
        ]);
    }
    public function checkEmail(Request $request)
    {
        $exists = User::where('email', $request->email)->exists();

        return response()->json([
            'exists' => $exists
        ]);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp_full' => 'required|digits:6' // Pastikan OTP lengkap
        ]);
        $email = session('email_verifikasi');
        $user = User::where('email', $email)->first();
        // dd($email);

        if (!$user) {
            return back()->with('error', 'User tidak ditemukan.');
        }

        if ($user->otp === $request->otp_full && !Carbon::parse($user->otp_expires_at)->isPast()) {
            $user->update([
                'otp' => null,
                'otp_expires_at' => null,
                // 'is_active' => true
            ]);

            // Session::forget('email_verifikasi');

            return redirect()->route('pw-baru-register')->with('success', 'Akun berhasil diverifikasi!');
        }

        return back()->with('error', 'OTP salah atau sudah kadaluarsa!');
    }

    public function resendOtp()
    {
        $email = Session::get('email_verifikasi');
        if (!$email) {
            return redirect()->route('register')->withErrors('Session expired, silakan daftar ulang.');
        }

        $user = User::where('email', $email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'User tidak ditemukan.']);
        }

        // Generate OTP baru
        $otp = rand(100000, 999999);
        $user->update([
            'otp' => $otp,
            'otp_expires_at' => Carbon::now()->addMinutes(5)
        ]);

        Mail::raw("Kode OTP baru Anda: $otp", function ($message) use ($user) {
            $message->to($user->email)->subject('Kode OTP Baru');
        });

        return back()->with('success', 'Kode OTP baru telah dikirim.');
    }
}
