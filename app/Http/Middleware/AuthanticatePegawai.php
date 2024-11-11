<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthanticatePegawai
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah pengguna sudah terautentikasi dengan guard 'pegawai'
        if (Auth::guard('pegawai')->check()) {
            // Menyimpan data pengguna ke dalam session
            $user = Auth::guard('pegawai')->user();
            session([
                'pegawai_id' => $user->id,
                'pegawai_name' => $user->name,
                'divisi_id' => $user->divisi_id,  // Menyimpan divisi_id ke session
            ]);
            return $next($request);
        }

        // Jika pengguna tidak terautentikasi, redirect ke halaman login
        return redirect()->route('login');
    }
}
