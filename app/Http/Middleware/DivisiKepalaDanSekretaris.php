<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DivisiKepalaDanSekretaris
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        // Pastikan hanya pengguna dengan divisi_id 3 yang bisa mengakses
        if ($user->divisi_id !== 3) {
            return redirect('/')->with('error', 'Anda tidak memiliki izin untuk memproses pengajuan ini.');
        }

        return $next($request);
    }
}

