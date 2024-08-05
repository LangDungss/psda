<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Dotenv\Exception\ValidationException;
use Illuminate\Contracts\Validation\Validator;




class PengajuanController extends Controller
{
    public function index()
    {
        $pegawaiId = Auth::guard('pegawai')->user()->id;
        $pengajuans = Pengajuan::where('pegawai_id', $pegawaiId)->latest()->get();
        // $namaUser = Auth::user()->nama;
        return view('dashboard.perjanalan-dinas.index', ['pengajuans' => $pengajuans]);
    }

    public function create()
    {
        // $pengajuans = Pengajuan::latest()->get();
        return view('dashboard.perjanalan-dinas.create', [
            'pengajuans' => Pengajuan::latest()->get()
        ]);
    }

    public function show($id)
    {
        $pengajuans = Pengajuan::findorFail($id);
        return view('dashboard.perjanalan-dinas.show', ['pengajuans' => $pengajuans]);
    }

    public function store(Request $request)
    {
        $tgl_berangkat = Carbon::parse($request->tgl_berangkat);
        $tgl_kembali = Carbon::parse($request->tgl_kembali);
        $jml_hari = $tgl_berangkat->diffInDays($tgl_kembali);

        $validatedData = $this->validate($request, [
            'kepada' => 'required|min:5',
            'perihal' => 'required|min:5|max:255',
            'tgl_berangkat' => 'required|date',
            'tgl_kembali' => 'required|date',
            'sumber_anggaran' => 'required|min:5',
            'anggota' => 'required',
            'transportasi' => 'required|min:5'
        ]);

        $validatedData['pegawai_id'] = Auth::guard('pegawai')->user()->id;
        $validatedData['jml_hari'] = $jml_hari;

        Pengajuan::create($validatedData);
        return redirect()->route('perjalanan-dinas.index');
    }

    public function edit($id)
    {
        $pengajuans = Pengajuan::findorFail($id);
        return view('dashboard.perjanalan-dinas.edit', ['pengajuans' => $pengajuans]);
    }

    public function update(Request $request, $id)
    {
        $pengajuans = Pengajuan::findOrFail($id);

        $tgl_berangkat = Carbon::parse($request->tgl_berangkat);
        $tgl_kembali = Carbon::parse($request->tgl_kembali);
        $jml_hari = $tgl_berangkat->diffInDays($tgl_kembali);

        $validatedData = $this->validate($request, [
            'kepada' => 'required|min:5',
            'perihal' => 'required|min:5|max:255',
            'tgl_berangkat' => 'required|date',
            'tgl_kembali' => 'required|date',
            'sumber_anggaran' => 'required|min:5',
            'anggota' => 'required',
            'transportasi' => 'required|min:5'
        ]);

        $validatedData['pegawai_id'] = Auth::guard('pegawai')->user()->id;
        $validatedData['jml_hari'] = $jml_hari;

        $pengajuans->update($validatedData);
        return redirect()->route('perjalanan-dinas.index');
    }

    public function destroy(Pengajuan $pengajuan)
    {
        $pengajuan->delete();

        // session()->flash('success', 'Data berhasil dihapus');
        return redirect()->route('perjalanan-dinas.index');
    }
}
