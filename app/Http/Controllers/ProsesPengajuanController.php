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
    
    // Filter pengajuan berdasarkan status dan status_sekretaris jika ada
    $pengajuans = Pengajuan::when($status, function ($query) use ($status) {
        return $query->where('status', $status);
    })
    ->where('status_sekretaris', 'disetujui')  // Filter hanya pengajuan dengan status_sekretaris 'disetujui'
    ->get();

    return view('dashboard.proses_pengajuan.index', compact('pengajuans'));
}



    public function updateStatus(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'comment' => 'required|max:65535',
            'status' => 'required|in:proses,disetujui,ditolak,perbaiki',
        ]);
    
        // Cari pengajuan cuti berdasarkan ID
        // Temukan pengajuan berdasarkan ID
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->status = $request->input('status');
        $pengajuan->save();

        PengajuanKomentar::create([
            'pengajuan_id' => $pengajuan->id,
            'id_surat' => $pengajuan->id, // Sesuaikan jika ada hubungan khusus dengan id_surat
            'komentar' => $request->input('comment'),
            'status' => $request->input('status'),
        ]);

        // Redirect kembali dengan notifikasi sukses
        return redirect()->back()->with('success', 'Status dan komentar berhasil diperbarui.');
    
    }

    public function updateSekretaris(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'status_sekretaris' => 'required|string|in:belum_dikonfirmasi,dikonfirmasi',
        ]);
    
        // Temukan pengajuan berdasarkan ID
        $pengajuan = Pengajuan::findOrFail($id);
        dd($pengajuan);
        // Update status sekretaris
        $pengajuan->status_sekretaris = $request->status_sekretaris;
        $pengajuan->save();
    
        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Status Sekretaris berhasil diperbarui.');
    }
    

}
