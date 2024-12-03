<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRoleAgent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->role === 'agent') {
            return $next($request); // Lanjutkan jika user memiliki role pemilik
        }

        // Jika user tidak memiliki role pemilik, redirect ke halaman login atau halaman lain
        return redirect('login')->withErrors([
            'role' => 'You do not have access to this page.',
        ]);
    }
}
