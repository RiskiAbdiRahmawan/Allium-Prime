<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Pastikan Auth diimport dengan namespace yang benar

class DashboardController extends Controller
{
    public function index(){

        // Ambil username dan role pengguna yang sedang login
        $user = Auth::user(); // Pastikan pengguna sudah login
        $username = $user->username; // Default ke 'Guest' jika null
        $role = $user->role; // Default ke 'User' jika null

        // Kirim data ke view
        return view('agent.dashboard', compact('username', 'role'));
    }
}
