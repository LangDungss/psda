<?php
namespace App\Http\Controllers;

use App\Models\Disposisi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf; // Import PDF facade

class DisposisiController extends Controller
{
    // Menampilkan daftar disposisi
    public function index()
    {
        $disposisis = Disposisi::all();
        return view('dashboard.disposisi.index', compact('disposisis'));
    }

    // Menampilkan form untuk membuat disposisi baru
    public function create()
    {
        return view('dashboard.disposisi.create');
    }

    // Menyimpan disposisi baru
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'surat_dari' => 'required|string',
            'diterima' => 'required|date',
            'tanggal_surat' => 'required|date',
            'nomor_surat' => 'required|string',
            'nomor_agenda' => 'required|string',
            'hal' => 'required|string',
            'catatan_sekretaris' => 'nullable|string',
            'diteruskan_kepada' => 'nullable|string',
            'tindak_lanjut' => 'nullable|string',
            'catatan_kepaladinas' => 'nullable|string',
            'file_surat' => 'required|file|mimes:pdf|max:2048', // Validasi file harus PDF
        ]);
    
        // Proses file PDF jika ada
        if ($request->hasFile('file_surat')) {
            // Ambil file
            $file = $request->file('file_surat');
    
            // Buat nama unik untuk file
            $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName()); // Ganti spasi dengan underscore
    
            // Tentukan lokasi penyimpanan file
            $filePath = $file->storeAs('uploads/surat', $filename, 'public'); // Simpan di storage/app/public/uploads/surat
    
            // Tambahkan path file ke dalam data yang divalidasi
            $validated['file_surat'] = $filePath;
        }
    
        // Simpan data disposisi ke database
        Disposisi::create($validated);
    
        // Redirect dengan pesan sukses
        return redirect()->route('disposisi.index')->with('success', 'Disposisi berhasil disimpan.');
    }
    
    

    // Menampilkan form untuk mengedit disposisi
    public function edit($id)
    {
        $disposisi = Disposisi::findOrFail($id);
        return view('dashboard.disposisi.edit', compact('disposisi'));
    }

    // Memperbarui data disposisi
    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'surat_dari' => 'required|string',
            'diterima' => 'required|date',
            'tanggal_surat' => 'required|date',
            'nomor_surat' => 'required|string',
            'nomor_agenda' => 'nullable|string',
            'hal' => 'required|string',
            'catatan_sekretaris' => 'nullable|string',
            'diteruskan_kepada' => 'nullable|string',
            'tindak_lanjut' => 'nullable|string',
            'catatan_kepaladinas' => 'nullable|string',
        ]);
    
        // Update data
        $disposisi = Disposisi::findOrFail($id);
        $disposisi->update($validatedData);
    
        return redirect()->route('disposisi.index')->with('success', 'Disposisi berhasil diperbarui.');
    }
    
    // Menghapus disposisi
    public function destroy($id)
    {
        $disposisi = Disposisi::findOrFail($id);
        $disposisi->delete();

        return redirect()->route('disposisi.index')->with('success', 'Disposisi berhasil dihapus.');
    }

    // Generate PDF Disposisi
    public function exportPdf($id)
    {
        // Ambil data disposisi berdasarkan ID
        $disposisi = Disposisi::findOrFail($id);
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

        // Pass data ke view PDF
        $pdf = Pdf::loadView('pdf.disposisi-detail', compact('disposisi', 'logoDataUrl'));
        
        // Kembalikan file PDF sebagai unduhan
        return $pdf->download('disposisi-detail.pdf');
    }

    // Preview PDF Disposisi
    public function previewPdf($id)
    {
        // Ambil data disposisi berdasarkan ID
        $disposisi = Disposisi::findOrFail($id);

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

        // Pass data ke view PDF
        $pdf = Pdf::loadView('pdf.disposisi-detail', compact('disposisi', 'logoDataUrl'));
        
        // Tampilkan PDF di browser
        return $pdf->stream('disposisi-detail.pdf');
    }
}
