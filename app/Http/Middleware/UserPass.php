<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserPass
{
    public function handle(Request $request, Closure $next)
    {

        // Periksa apakah pengguna sudah diautentikasi
        if (Auth::check()) {
            // Jika sudah, arahkan ke halaman yang dituju sebelumnya
            return $next($request);
        }

        // Ambil kredensial dari permintaan
        $credentials = $request->only('username', 'password');

        // Coba lakukan otentikasi
        if (Auth::attempt($credentials)) {
            // Jika berhasil, arahkan ke halaman yang dituju sebelumnya
            return $next($request);
        }

        // Jika gagal, arahkan kembali ke halaman login dengan pesan kesalahan
        return redirect('signup')->with('error', 'Invalid username or password');
    }
}

