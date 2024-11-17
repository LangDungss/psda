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


    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:proses,disetujui,ditolak,perbaiki',
            'comment' => 'required|max:65535',
        ]);
    
        // Temukan pengajuan berdasarkan ID
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->status = $request->input('status');
        $pengajuan->save();
    
        // Simpan komentar dan status baru ke tabel pengajuan_komentar
        PengajuanKomentar::create([
            'pengajuan_id' => $pengajuan->id,
            'id_surat' => $pengajuan->id, // Sesuaikan jika ada hubungan khusus dengan id_surat
            'komentar' => $request->input('comment'),
            'status' => $request->input('status'),
        ]);
    
        return redirect()->back()->with('success', 'Status dan komentar berhasil diperbarui.');
    }
    

}
