<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $username = session()->get('username');
        $password = session()->get('password');
        if ($username && $password) {
            return view('dashboard');
        } else {
            return redirect()->route('lph.login'); // Redirect ke halaman login jika tidak ada sesi username dan password
        }
    }
}
