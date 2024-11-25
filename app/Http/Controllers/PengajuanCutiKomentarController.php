<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanCuti;
use App\Models\PengajuanCutiKomentar;

class PengajuanCutiKomentarController extends Controller
{
    // Menampilkan komentar untuk pengajuan cuti tertentu
    public function index(Request $request)
    {
        $status = $request->query('status');
        
        // Filter pengajuan cuti berdasarkan status jika ada
        $pengajuans = PengajuanCuti::when($status, function ($query) use ($status) {
            return $query->where('status', $status);
        })->get();

        return view('dashboard.pengajuan_cutiproses.index', compact('pengajuans', 'status'));
    }

    // Menambahkan komentar untuk pengajuan cuti
    public function store(Request $request, $pengajuanCutiId)
    {
        $request->validate([
            'komentar' => 'required|max:65535',
            'status' => 'required|in:Pending,Disetujui,Ditolak,Perbaiki',
        ]);

        // Cek apakah pengajuan cuti ada
        $pengajuanCuti = PengajuanCuti::findOrFail($pengajuanCutiId);

        // Tambahkan komentar baru
        PengajuanCutiKomentar::create([
            'pengajuancuti_id' => $pengajuanCuti->id,
            'komentar' => $request->input('komentar'),
            'status' => $request->input('status'),
        ]);

        // Perbarui status pengajuan cuti
        $pengajuanCuti->update([
            'status' => $request->input('status'),
        ]);

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan dan status diperbarui.');
    }
}
