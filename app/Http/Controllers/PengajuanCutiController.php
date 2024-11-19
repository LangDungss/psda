<?php

namespace App\Http\Controllers;

use App\Models\PengajuanCuti;
use App\Models\PengajuanKomentar;

use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengajuanCutiController extends Controller
{
    // Menampilkan daftar pengajuan cuti
    public function index()
    {
        // Ambil ID pegawai dari user yang sedang login
        $pegawaiId = Auth::guard('pegawai')->user()->id;
    
        // Ambil data pengajuan cuti beserta komentar terkait, menggunakan eager loading
        $pengajuanCuti = PengajuanCuti::with(['komentar' => function ($query) {
            $query->latest(); // Ambil komentar terbaru
        }])->where('pegawai_id', $pegawaiId)->latest()->get();
    
        // Return data ke view
        return view('dashboard.pengajuan-cuti.index', compact('pengajuanCuti'));
    }

    // Menampilkan form tambah pengajuan cuti
    public function create()
    {
        return view('dashboard.pengajuan-cuti.create');
    }

    // Menyimpan data pengajuan cuti
    public function store(Request $request)
{
    // Validasi input
    $validated = $request->validate([
        'nomor_surat' => 'nullable|string',
        'nama' => 'required|string',
        'nip' => 'required|string',
        'jabatan' => 'required|string',
        'masa_kerja' => 'required|string',
        'unit_kerja' => 'required|string',
        'jenis_cuti' => 'required|string',
        'alasan_cuti' => 'required|string',
        'tanggal_mulai' => 'required|date',
        'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
        'alamat_cuti' => 'required|string',
        'catatan' => 'nullable|string',
    ]);

    // Ambil pegawai_id dari user yang sedang login
    $pegawai_id = Auth::guard('pegawai')->user()->id;

    // Gabungkan pegawai_id dengan data yang divalidasi
    $validated['pegawai_id'] = $pegawai_id;

    // Simpan data ke database
    PengajuanCuti::create($validated);

    // Redirect dengan pesan sukses
    return redirect()->route('pengajuan-cuti.index')->with('success', 'Pengajuan cuti berhasil ditambahkan.');
}


    // Menampilkan form edit pengajuan cuti
    public function edit(PengajuanCuti $pengajuanCuti)
    {
        return view('pengajuan_cuti.edit', compact('pengajuanCuti'));
    }

    // Memperbarui data pengajuan cuti
    public function update(Request $request, PengajuanCuti $pengajuanCuti)
    {
        $validated = $request->validate([
            'nomor_surat' => 'nullable|string',
            'nama' => 'required|string',
            'nip' => 'required|string',
            'jabatan' => 'required|string',
            'masa_kerja' => 'required|string',
            'unit_kerja' => 'required|string',
            'jenis_cuti' => 'required|string',
            'alasan_cuti' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'alamat_cuti' => 'required|string',
            'catatan' => 'nullable|string',
        ]);

        $pengajuanCuti->update($validated);

        return redirect()->route('pengajuan-cuti.index')->with('success', 'Pengajuan cuti berhasil diperbarui.');
    }

    public function exportPdf($id)
    {
        // Ambil data pengajuan cuti berdasarkan ID
        $pengajuan = PengajuanCuti::findOrFail($id);
    
        // Buat file PDF dengan view yang berisi detail pengajuan
        $pdf = Pdf::loadView('pdf.pengajuan-cuti', compact('pengajuan'));
    
        // Menyimpan file PDF ke dalam storage untuk preview
        $filePath = storage_path('app/public/pengajuan-cuti-'.$id.'.pdf');
        $pdf->save($filePath);
    
        // Kembalikan path file PDF untuk ditampilkan di preview
        return response()->file($filePath);
    }
    


    // Menghapus data pengajuan cuti
    public function destroy(PengajuanCuti $pengajuanCuti)
    {
        $pengajuanCuti->delete();

        return redirect()->route('pengajuan-cuti.index')->with('success', 'Pengajuan cuti berhasil dihapus.');
    }
}
