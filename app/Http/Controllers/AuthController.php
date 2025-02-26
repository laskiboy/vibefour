<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

        $petugas = User::where('username', $request->usernameAndEmail)->first();

        if ($petugas && Hash::check($request->password, $petugas->password)) {
            return response('success');
        } else {
            return '<p style="color: red;">Username atau password salah!</p>';
        }
        return response('error', 401);
    }

    public function showRegisForm()
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'nama' => 'required',
            'email' => 'required',
        ]);

        $request['role_id'] = 1;
        User::create($request->all());
        // Auth::login($user);
        return redirect()->route('otp-register');
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
}
