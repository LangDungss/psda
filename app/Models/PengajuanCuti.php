<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanCuti extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_cuti';

    protected $fillable = [
        'nomor_surat',
        'nama',
        'nip',
        'jabatan',
        'masa_kerja',
        'unit_kerja',
        'jenis_cuti',
        'alasan_cuti',
        'tanggal_mulai',
        'tanggal_selesai',
        'alamat_cuti',
        'status',
        'catatan',
        'pegawai_id',
    ];

    public function komentar()
    {
        return $this->hasMany(PengajuanKomentar::class, 'pengajuan_id', 'id');
        // 'pengajuan_id' adalah foreign key di tabel pengajuan_komentar
        // 'id' adalah primary key di tabel pengajuan
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
