<?php

namespace App\Http\Controllers;

use App\Models\OtpCode;
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

        if ($user && Hash::check($request->password, $user->password)) {
            return response('success'); // Hanya teks "success"
        } else {
            return response('error', 200); // Pastikan status 200 agar tidak masuk blok error AJAX
        }
    }

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
        ]);

        $otp = OtpCode::create([
            'user_id' => $user->id,
            'otp' => $otp_anda = rand(100000, 999999),
            'expires_at' => Carbon::now()->addMinutes(10),
            'attempts' => 0,
            'type' => 'register'
        ]);

        Mail::send('emails.otp', ['otp' => $otp_anda], function ($message) use ($user) {
            $message->to($user->email)
                ->subject('Kode OTP Anda');
        });

        session(['email_verifikasi' => $user->email]);

        session(['tipe' => $user->type]);

        session(['attempts' => $otp->attempts]);

        session(['user_id_verifikasi' => $otp->user_id]);

        return redirect()->route('verify.otp.view')->with('success', 'Kode OTP telah dikirim ke email Anda.');
    }

    public function validatePassword(Request $request)
    {
        $request->validate([
            'password' => [
                'required',
                'min:8',
                'regex:/[0-9]/', // Harus mengandung angka
                'regex:/[a-zA-Z]/' // Harus mengandung huruf
            ],
            'confirm_password' => 'required|same:password'
        ], [
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.regex' => 'Password harus mengandung minimal 1 huruf dan 1 angka.',
            'confirm_password.required' => 'Konfirmasi password wajib diisi.',
            'confirm_password.same' => 'Konfirmasi password tidak cocok dengan password.'
        ]);

        return response()->json(['success' => true, 'message' => 'Password valid dan cocok!']);
    }

    public function konfirm_email(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        // Periksa apakah email terdaftar
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Email tidak ditemukan');
        }

        // Hapus OTP lama jika ada
        OtpCode::where('user_id', $user->id)
            ->where('type', 'pwBaru')
            ->delete();

        // Buat OTP baru
        $otp_anda = rand(100000, 999999);
        $otp = OtpCode::create([
            'user_id' => $user->id,
            'otp' => $otp_anda,
            'expires_at' => Carbon::now()->addMinutes(10),
            'attempts' => 0,
            'type' => 'pwBaru'
        ]);

        // Kirim OTP melalui email
        Mail::send('emails.otp', ['otp' => $otp_anda], function ($message) use ($user) {
            $message->to($user->email)
                ->subject('Kode OTP Anda');
        });

        // Simpan informasi ke session
        session(['email_verifikasi' => $user->email]);
        session(['tipe' => $otp->type]);
        session(['attempts' => $otp->attempts]);
        session(['user_id_verifikasi' => $otp->user_id]);

        return redirect()->route('otp-lupa-pw')->with('success', 'Kode OTP telah dikirim ke email Anda.');
    }

    public function buat_password(Request $request)
    {
        $email = Session::get('email_verifikasi');

        $request->validate([
            'password' => [
                'required',
                'min:8',
                'regex:/[0-9]/',
                'regex:/[a-zA-Z]/'
            ],
            'confirm_password' => 'required|same:password',
        ]);

        $user = User::where('email', $email)->first();

        if (!$user) {
            if ($request->ajax()) {
                return response()->json([
                    'error' => 'Email Anda tidak ditemukan.'
                ], 422);
            }
            return redirect()->route('login')->with('error', 'Email Anda tidak ditemukan.');
        }

        $user->password = Hash::make($request->password);
        $user->save();
        Auth::login($user); // Auto login

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Password Anda telah berhasil dibuat.',
                'redirect' => route('oi')
            ]);
        }

        return redirect()->route('oi')->with('success', 'Password Anda telah berhasil dibuat.');
        // Jika request type adalah pwbaru
    }
    public function buat_password_baru(Request $request)
    {
        $email = Session::get('email_verifikasi');

        $request->validate([
            'password' => [
                'required',
                'min:8',
                'regex:/[0-9]/',
                'regex:/[a-zA-Z]/'
            ],
            'confirm_password' => 'required|same:password',
        ]);

        $user = User::where('email', $email)->first();

        if (!$user) {
            if ($request->ajax()) {
                return response()->json([
                    'error' => 'Email Anda tidak ditemukan.'
                ], 422);
            }
            return redirect()->route('login')->with('error', 'Email Anda tidak ditemukan.');
        }

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Password Anda telah berhasil dibuat.',
                'redirect' => route('login')
            ]);
        }

        return redirect()->route('login')->with('success', 'Password Anda telah berhasil dibuat.');
        // Jika request type adalah pwbaru
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
            'otp_full' => 'required|digits:6', // Pastikan OTP lengkap
            // 'type' => 'required'
        ]);

        $type = Session::get('tipe');

        $userId = session('user_id_verifikasi'); // Ubah sesi untuk menyimpan user_id, bukan email
        $user = User::find($userId);

        if (!$user) {
            return back()->with('error', 'User tidak ditemukan.');
        }

        // Ambil OTP yang sesuai dengan user_id
        $otpRecord = OtpCode::where('user_id', $user->id)->latest()->first();
        // dd($otpRecord, $request);

        if (!$otpRecord || $otpRecord->otp !== $request->otp_full || Carbon::parse($otpRecord->expires_at)->isPast()) {
            return back()->with('error', 'OTP salah atau sudah kadaluarsa!');
        }

        // Jika OTP valid, hapus OTP setelah digunakan
        $otpRecord->delete();

        // Session::forget('user_id_verifikasi');

        if ($type == 'register') {
            return redirect()->route('pw-baru-register')->with('success', 'Akun berhasil diverifikasi!');
        } elseif ($type == 'pwBaru') {
            return redirect()->route('pw-baru')->with('success', 'Akun berhasil diverifikasi!');
        }
    }

    public function resendOtp(Request $request)
    {
        $userId = session('user_id_verifikasi');

        $user = User::find($userId);
        if (!$user) {
            return back()->with('error', 'User tidak ditemukan.');
        }

        $otpData = OtpCode::where('user_id', $user->id)->first();
        $today = Carbon::now()->toDateString();
        if ($otpData && $otpData->updated_at->toDateString() == $today && $otpData->attempts >= 10) {
            return back()->with('error', 'Anda telah mencapai batas pengiriman OTP hari ini. Coba lagi besok.');
        }
        if ($otpData) {
            if ($otpData->updated_at->toDateString() != $today) {
                $otpData->update([
                    'otp' => mt_rand(100000, 999999),
                    'expires_at' => Carbon::now()->addMinutes(10),
                    'attempts' => 1,
                ]);
            } else {
                $otpData->update([
                    'otp' => mt_rand(100000, 999999),
                    'expires_at' => Carbon::now()->addMinutes(10),
                    'attempts' => $otpData->attempts + 1, // Tambah attempt
                ]);
            }
        } else {
            OtpCode::create([
                'user_id' => $user->id,
                'otp' => mt_rand(100000, 999999),
                'expires_at' => Carbon::now()->addMinutes(10),
                'attempts' => 1,
            ]);
        }

        $lastSentTime = Session::get('last_otp_sent_time');
        if ($lastSentTime && now()->diffInSeconds($lastSentTime) < 60) {
            $remainingTime = 60 - now()->diffInSeconds($lastSentTime);
            return back()->withErrors(['otp' => "Silakan coba lagi dalam $remainingTime detik."]);
        }

        Session::put('last_otp_sent_time', now());

        Mail::send('emails.otp', ['otp' => $otpData->otp], function ($message) use ($user) {
            $message->to($user->email)
                ->subject('Kode OTP Anda');
        });

        return back()->with('success', 'OTP telah dikirim ulang ke email Anda.');
    }

    public function resendOtpBaru(Request $request)
    {
        $userId = session('user_id_verifikasi');

        $user = User::find($userId);
        if (!$user) {
            return back()->with('error', 'User tidak ditemukan.');
        }

        $otpData = OtpCode::where('user_id', $user->id)->first();
        $today = Carbon::now()->toDateString();
        if ($otpData && $otpData->updated_at->toDateString() == $today && $otpData->attempts >= 10) {
            return back()->with('error', 'Anda telah mencapai batas pengiriman OTP hari ini. Coba lagi besok.');
        }
        if ($otpData) {
            if ($otpData->updated_at->toDateString() != $today) {
                $otpData->update([
                    'otp' => mt_rand(100000, 999999),
                    'expires_at' => Carbon::now()->addMinutes(10),
                    'attempts' => 1,
                ]);
            } else {
                $otpData->update([
                    'otp' => mt_rand(100000, 999999),
                    'expires_at' => Carbon::now()->addMinutes(10),
                    'attempts' => $otpData->attempts + 1, // Tambah attempt
                ]);
            }
        } else {
            OtpCode::create([
                'user_id' => $user->id,
                'otp' => mt_rand(100000, 999999),
                'expires_at' => Carbon::now()->addMinutes(10),
                'attempts' => 1,
            ]);
        }

        $lastSentTime = Session::get('last_otp_sent_time');
        if ($lastSentTime && now()->diffInSeconds($lastSentTime) < 60) {
            $remainingTime = 60 - now()->diffInSeconds($lastSentTime);
            return back()->withErrors(['otp' => "Silakan coba lagi dalam $remainingTime detik."]);
        }

        Session::put('last_otp_sent_time', now());

        Mail::send('emails.otp', ['otp' => $otpData->otp], function ($message) use ($user) {
            $message->to($user->email)
                ->subject('Kode OTP Anda');
        });

        return back()->with('success', 'OTP telah dikirim ulang ke email Anda.');
    }
}
