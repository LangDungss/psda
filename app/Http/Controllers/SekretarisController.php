<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\PengajuanKomentar;
use Illuminate\Http\Request;

class SekretarisController extends Controller
{
    /**
     * Menampilkan daftar pengajuan yang perlu dikonfirmasi oleh sekretaris.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $status = $request->query('status_sekretaris');
        
        // Filter pengajuan berdasarkan status jika ada
        $pengajuans = Pengajuan::when($status, function ($query) use ($status) {
            return $query->where('status_sekretaris', $status);
        })->get();

        return view('dashboard.proses_pengajuan.sekretaris', compact('pengajuans'));
    }

    /**
     * Menyetuji atau menolak pengajuan oleh sekretaris.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function updateStatus(Request $request, $id)
     {
         // Validasi input untuk status_sekretaris
         $request->validate([
             'status_sekretaris' => 'required|in:belum_dikonfirmasi,disetujui,ditolak', // Validasi untuk status_sekretaris
         ]);
     
         // Cari pengajuan berdasarkan ID
         $pengajuan = Pengajuan::findOrFail($id);
     
         // Update status_sekretaris
         $pengajuan->status_sekretaris = $request->input('status_sekretaris');
     
         $pengajuan->save();
     
         // Redirect kembali dengan notifikasi sukses
         return redirect()->back()->with('success', 'Status pengajuan berhasil diperbarui.');
     }
     
     public function previewSurat($id)
    {
        // Ambil data pengajuan berdasarkan ID
        $pengajuan = Pengajuan::findOrFail($id);

        if (is_array($pengajuan->staf_pendamping)) {
            $stafPendamping = $pengajuan->staf_pendamping; // Array yang langsung bisa digunakan
        } else {
            // Jika data bukan array, lakukan pengecekan dan mungkin perlu decode JSON
            $stafPendamping = json_decode($pengajuan->staf_pendamping, true);
        }

        // Render preview surat menggunakan view
        return view('pdf.preview', compact('pengajuan', 'stafPendamping'));
    }

    

    /**
     * Menampilkan detail pengajuan.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Ambil data pengajuan berdasarkan ID
        $pengajuan = Pengajuan::findOrFail($id);

        return view('sekretaris.show', compact('pengajuan'));
    }
}
