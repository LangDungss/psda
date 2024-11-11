<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;

class ProsesPengajuanController extends Controller
{
    public function index()
    {
        // Ambil semua pengajuan dengan status 'proses'
        $pengajuans = Pengajuan::where('status', 'proses')->get();

        // Return view dengan data pengajuans
        return view('dashboard.proses_pengajuan.index', compact('pengajuans'));
    }
}

