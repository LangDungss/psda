<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;

class ProsesPengajuanController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->query('status');
        
        // Filter pengajuan berdasarkan status jika ada
        $pengajuans = Pengajuan::when($status, function ($query) use ($status) {
            return $query->where('status', $status);
        })->get();

        return view('dashboard\proses_pengajuan\index', compact('pengajuans'));
    }

    public function updateStatus(Request $request, $id)
    {
        // Validasi status yang dipilih
        $request->validate([
            'status' => 'required|in:proses,disetujui,ditolak,perbaiki',
        ]);

        // Cari pengajuan berdasarkan ID
        $pengajuan = Pengajuan::findOrFail($id);

        // Update status pengajuan
        $pengajuan->status = $request->status;
        $pengajuan->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('proses-pengajuan.index')->with('success', 'Status pengajuan berhasil diubah!');
    }
}

