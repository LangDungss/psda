<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use App\Models\Pengajuan;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PengajuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //    $pegawaiId = Auth::guard('pegawai')->user()->id;
        $pegawai = Pegawai::first();

        Pengajuan::create([
            // 'no_pengajuan' => '11223344',
            // 'nama_pengaju' => 'Abdul rahman',
            'kepada' => 'Sekretariat PSDA',
            'perihal' => 'mengukur ketinggian air rawah di desa penempah pedang',
            'tgl_berangkat' => '2024-05-21',
            'tgl_kembali' => '2024-05-25',
            'jml_hari' => Carbon::parse('2024-05-21')->diffInDays('2024-05-25'),
            'sumber_anggaran' => 'Dinas Pengelolaaan Sumber Daya Air',
            'anggota' => json_encode(['Abdul Rahman', 'Budi', 'Caca']),
            'transportasi' => 'kendaraan pribadi',
            'is_admin' => '0',
            'pegawai_id' => $pegawai->id
        ]);
    }
}
