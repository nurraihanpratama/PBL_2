<?php

namespace App\Http\Controllers;

use App\Models\LoginLph;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $username = $request->session()->get('username');
        $loginlph = LoginLph::where('username', $username)->get();

        return view('auth.login', compact('loginlph'));
    }


    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Autentikasi berhasil, arahkan pengguna ke dashboard
            return redirect()->route('dashboard');
        } else {
            // Autentikasi gagal, tampilkan pesan error
            return back()->with('error', 'Username atau password salah');
        }
    }


    public function logout(Request $request)
    {
        //
    }
}
