<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanCuti extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_cuti';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'nomor_surat',
        'nama',
        'nip',
        'jabatan',
        'masa_kerja',
        'unit_kerja',
        'jenis_cuti',
        'alasan_cuti',
        'lama_cuti', // Disesuaikan untuk menggantikan tanggal_mulai dan tanggal_selesai
        'alamat_cuti',
        'status',
        'catatan_cuti', // Mengganti catatan dengan tipe JSON
        'pegawai_id',
    ];

    // Cast untuk kolom JSON
    protected $casts = [
        'catatan_cuti' => 'array',
    ];

    public function komentar()
    {
        return $this->hasMany(PengajuanCutiKomentar::class, 'pengajuancuti_id', 'id');
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
