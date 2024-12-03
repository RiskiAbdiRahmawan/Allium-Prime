<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginForm(){
        return view('login');
    }

    public function login(Request $request){
        // Validasi data yang dimasukkan oleh user
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cek apakah username dan password valid
        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Arahkan pengguna ke dashboard berdasarkan role mereka
            if ($user->role === 'pemilik') {
                return redirect()->route('Pemilik.Dashboard'); // Route untuk dashboard pemilik
            } elseif ($user->role === 'agent') {
                return redirect()->route('Agent.Dashboard'); // Route untuk dashboard agent
            }
        }else{
            return back()->withErrors([
                'login' => 'Your username or password is incorrect.',
            ]);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }
}
