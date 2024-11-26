<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use App\Models\PengajuanKomentar;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class ProsesPengajuanController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->query('status');
        
        // Filter pengajuan berdasarkan status jika ada
        $pengajuans = Pengajuan::when($status, function ($query) use ($status) {
            return $query->where('status', $status);
        })->get();

        return view('dashboard.proses_pengajuan.index', compact('pengajuans'));
    }


    public function updateStatus(Request $request, $pengajuanCutiId)
    {
        // Validasi input
        $request->validate([
            'komentar' => 'required|max:65535',
            'status' => 'required|in:proses,disetujui,ditolak,perbaiki',
        ]);
    
        // Cari pengajuan cuti berdasarkan ID
        $pengajuanCuti = PengajuanCuti::findOrFail($pengajuanCutiId);
    
        // Tambahkan komentar baru ke tabel PengajuanCutiKomentar
        PengajuanCutiKomentar::create([
            'pengajuancuti_id' => $pengajuanCuti->id,
            'komentar' => $request->input('komentar'),
            'status' => $request->input('status'),
        ]);
    
        // Perbarui status pengajuan cuti
        $pengajuanCuti->update([
            'status' => $request->input('status'),
        ]);
    
        // Redirect kembali dengan notifikasi sukses
        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan dan status diperbarui.');
    }

}
