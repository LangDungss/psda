<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function authanticate(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:5'
    ]);

    if (Auth::guard('pegawai')->attempt($credentials)) {
        // Regenerasi session untuk mencegah serangan session fixation
        $request->session()->regenerate();

        // Menyimpan data pengguna ke dalam session setelah login berhasil
        $user = Auth::guard('pegawai')->user();
        session([
            'pegawai_id' => $user->id,
            'pegawai_name' => $user->name,
            'divisi_id' => $user->divisi_id,  // Menyimpan divisi_id ke session
        ]);

        session()->flash('success', 'Login berhasil');
        return redirect()->route('dashboard.index');
    } else {
        return redirect()->back()->with('error', 'Email atau password salah');
    }
}




    public function logout()
    {
        Auth::guard('pegawai')->logout();
        return redirect()->route('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
