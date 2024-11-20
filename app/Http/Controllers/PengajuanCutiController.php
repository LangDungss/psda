<?php

namespace App\Http\Controllers;

use App\Models\PengajuanCuti;
use App\Models\PengajuanKomentar;

use Barryvdh\DomPDF\Facade\Pdf;
use Mpdf\Mpdf;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengajuanCutiController extends Controller
{
    // Menampilkan daftar pengajuan cuti
    public function index()
    {
        // Ambil ID pegawai dari user yang sedang login
        $pegawaiId = Auth::guard('pegawai')->user()->id;
        // $pengajuan = PengajuanCuti::findOrFail(2);
        // $catatanCuti = json_decode($pengajuan->catatan_cuti, true);
        // dd($catatanCuti);

    
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
            'lama_cuti' => 'required|integer|min:1', // Validasi lama cuti (harus angka dan minimal 1 hari)
            'alamat_cuti' => 'required|string',
            'catatan_cuti' => 'nullable|array', // Validasi catatan sebagai array
            'catatan_cuti.*.tahun' => 'required_with:catatan_cuti|string', // Validasi isi JSON
            'catatan_cuti.*.sisa' => 'required_with:catatan_cuti|integer',
            'catatan_cuti.*.keterangan' => 'nullable|string',
        ]);
    
        // Ambil pegawai_id dari user yang sedang login
        $pegawai_id = Auth::guard('pegawai')->user()->id;
    
        // Gabungkan pegawai_id dengan data yang divalidasi
        $validated['pegawai_id'] = $pegawai_id;
    
        // Simpan data catatan_cuti sebagai JSON
        if (!empty($validated['catatan_cuti'])) {
            $validated['catatan_cuti'] = json_encode($validated['catatan_cuti']);
        }
    
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
        $catatanCuti = json_decode($pengajuan->catatan_cuti, true);
        // Path gambar logo yang ada di folder public
        $logoPath = public_path('logo.png'); // Sesuaikan dengan nama logo yang ada di folder public
    
        // Pastikan file logo ada
        if (file_exists($logoPath)) {
            // Konversi gambar logo ke format base64
            $logoBase64 = base64_encode(file_get_contents($logoPath));
            // URL gambar base64 untuk digunakan di PDF
            $logoDataUrl = 'data:image/png;base64,' . $logoBase64;
        } else {
            // Logo tidak ditemukan, bisa menggunakan gambar default atau kosong
            $logoDataUrl = '';
        }
    
        // Buat file PDF dengan view yang berisi detail pengajuan cuti
        $pdf = Pdf::loadView('pdf.pengajuan-cuti', compact('pengajuan', 'logoDataUrl', 'catatanCuti'));
    
        // Menyimpan file PDF ke dalam storage untuk preview
        $filePath = storage_path('app/public/pengajuan-cuti-' . $id . '.pdf');
        $pdf->save($filePath);
    
        // Kembalikan path file PDF untuk ditampilkan di preview
        return response()->file($filePath);
    }

    public function previewSurat($id)
{
    // Ambil data pengajuan cuti berdasarkan ID
    $pengajuan = PengajuanCuti::findOrFail($id);

    // Decode JSON catatan_cuti menjadi array asosiatif
    $catatanCuti = json_decode($pengajuan->catatan_cuti, true);

    // Path gambar logo yang ada di folder public
    $logoPath = asset('logo.png'); // URL logo untuk digunakan di Blade

    // Pastikan file logo ada
    if (!file_exists(public_path('logo.png'))) {
        $logoPath = ''; // Jika logo tidak ditemukan, set kosong atau gunakan default
    }

    // Arahkan ke tampilan preview surat
    return view('pdf.template', compact('pengajuan', 'logoPath', 'catatanCuti'));
}


    

    


    // Menghapus data pengajuan cuti
    public function destroy(PengajuanCuti $pengajuanCuti)
    {
        $pengajuanCuti->delete();

        return redirect()->route('pengajuan-cuti.index')->with('success', 'Pengajuan cuti berhasil dihapus.');
    }
}
