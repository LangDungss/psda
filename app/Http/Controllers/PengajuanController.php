<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\PengajuanKomentar;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengajuanController extends Controller
{
    /**
     * Menampilkan daftar pengajuan milik pegawai yang sedang login.
     */
    public function index()
    {
        $pegawaiId = Auth::guard('pegawai')->user()->id;
    
        // Ambil data pengajuan beserta komentar terkait menggunakan eager loading
        $pengajuans = Pengajuan::with(['komentar' => function ($query) {
            $query->latest(); // Ambil komentar terbaru
        }])->where('pegawai_id', $pegawaiId)->latest()->get();
        
    
        return view('dashboard.perjanalan-dinas.index', ['pengajuans' => $pengajuans]);
    }

    public function getKomentar($id)
{
    $komentar = PengajuanKomentar::where('pengajuan_id', $id)->latest()->first();

    return response()->json([
        'komentar' => $komentar ? $komentar->komentar : null,
    ]);
}


    /**
     * Menampilkan form untuk membuat pengajuan baru.
     */
    public function create()
    {
        return view('dashboard.perjanalan-dinas.create');
    }

    /**
     * Menyimpan pengajuan baru ke database.
     */
    public function store(Request $request)
    {
        // Debugging: Lihat semua data yang diterima
        // dd($request->all());
    
        // Validasi input
        $request->validate([
            'kepada' => 'required|string|max:255',
            'dari' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'nomor' => 'required|string|max:255',
            'sifat' => 'required|string|max:255',
            'hal' => 'required|string|max:255',
            'dasar' => 'required|string',
            'urusan' => 'required|string|max:255',
            'tujuan' => 'required|string|max:255',
            'lama_perjalanan' => 'required|string|max:255',
            'sumber_pembayaran' => 'required|string|max:255',
            'jumlah_berpergian' => 'required|integer|min:1',
            'petugas_pendamping.*.nama' => 'required|string|max:255', // Perbaikan di sini
        ]);
    
        // Ambil pegawai_id dari user yang sedang login (auth guard)
        $pegawai_id = Auth::guard('pegawai')->user()->id;
    
        // Gabungkan data yang diterima dari form dengan pegawai_id
        $data = $request->all();
        $data['pegawai_id'] = $pegawai_id;  // Menambahkan pegawai_id ke dalam data
    
        dd($data);
    
        // Proses penyimpanan data ke database
        Pengajuan::create($data);
    
        return redirect()->route('perjalanan-dinas.index')->with('success', 'Pengajuan berhasil disimpan.');
    }


    /**
     * Menampilkan detail pengajuan tertentu.
     */
    public function show($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        return view('dashboard.perjalanan-dinas.show', ['pengajuan' => $pengajuan]);
    }

    /**
     * Menampilkan form untuk mengedit pengajuan.
     */
    public function edit($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        return view('dashboard\perjanalan-dinas\edit', ['pengajuan' => $pengajuan]);
    }

    /**
     * Memperbarui data pengajuan yang ada di database.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'kepada' => 'required|string|max:255',
            'dari' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'nomor' => 'required|string|max:255',
            'sifat' => 'required|string|max:255',
            'hal' => 'required|string|max:255',
            'dasar' => 'required|string',
            'urusan' => 'required|string|max:255',
            'tujuan' => 'required|string|max:255',
            'lama_perjalanan' => 'required|string|max:255',
            'sumber_pembayaran' => 'required|string|max:255',
            'jumlah_berpergian' => 'required|integer|min:1',
            'staf_pendamping.*.nama' => 'required|string|max:255', // Validasi untuk staf pendamping
            'staf_pendamping.*.nip' => 'required|string|max:255',
            'staf_pendamping.*.pangkat' => 'required|string|max:255',
            'staf_pendamping.*.jabatan' => 'required|string|max:255',
        ]);
    
        // Ambil pengajuan berdasarkan ID
        $pengajuan = Pengajuan::findOrFail($id);
    
        // Ambil pegawai_id dari user yang sedang login (auth guard)
        $pegawai_id = Auth::guard('pegawai')->user()->id;
    
        // Gabungkan data yang diterima dari form dengan pegawai_id
        $data = $request->all();
        $data['pegawai_id'] = $pegawai_id;  // Menambahkan pegawai_id ke dalam data
    
        // Proses pembaruan data ke database
        $pengajuan->update($data);
    
        return redirect()->route('perjalanan-dinas.index')->with('success', 'Pengajuan berhasil diperbarui.');
    }
    /**
     * Menghapus pengajuan dari database.
     */
    public function destroy($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);

        try {
            $pengajuan->delete();
            return redirect()->route('perjalanan-dinas.index')->with('success', 'Pengajuan berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('perjalanan-dinas.index')->with('error', 'Terjadi kesalahan saat menghapus pengajuan.');
        }
    }

    public function exportPdf($id)
{
    // Ambil data pengajuan berdasarkan ID
    $pengajuan = Pengajuan::findOrFail($id);

    if (is_array($pengajuan->staf_pendamping)) {
        $stafPendamping = $pengajuan->staf_pendamping; // Array yang langsung bisa digunakan
    } else {
        // Jika data bukan array, lakukan pengecekan dan mungkin perlu decode JSON
        $stafPendamping = json_decode($pengajuan->staf_pendamping, true);
    }

    // Pass data ke view PDF
    $pdf = Pdf::loadView('pdf.pengajuan-detail', compact('pengajuan', 'stafPendamping'));
    
    // Kembalikan file PDF sebagai unduhan
    return $pdf->download('pengajuan-detail.pdf');
}

public function previewPdf($id)
{
    // Ambil data pengajuan berdasarkan ID
    $pengajuan = Pengajuan::findOrFail($id);

    if (is_array($pengajuan->staf_pendamping)) {
        $stafPendamping = $pengajuan->staf_pendamping; // Array yang langsung bisa digunakan
    } else {
        // Jika data bukan array, lakukan pengecekan dan mungkin perlu decode JSON
        $stafPendamping = json_decode($pengajuan->staf_pendamping, true);
    }

    // Pass data ke view PDF
    $pdf = Pdf::loadView('pdf.pengajuan-detail', compact('pengajuan', 'stafPendamping'));
    
    // Tampilkan PDF di browser
    return $pdf->stream('pengajuan-detail.pdf');
}




public function storeKomentar(Request $request)
{
    $validated = $request->validate([
        'pengajuan_id' => 'required|exists:pengajuans,id',
        'komentar' => 'required|string',
        'status' => 'required|in:proses,disetujui,ditolak,perbaiki',
    ]);

    PengajuanKomentar::create($validated);

    return redirect()->back()->with('success', 'Komentar berhasil ditambahkan!');
}


}
