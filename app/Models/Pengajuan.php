<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kepada',
        'perihal',
        'tgl_berangkat',
        'tgl_kembali',
        'jml_hari',
        'sumber_anggaran',
        'anggota', // json
        'transportasi',
        'pegawai_id'
    ];

    protected $casts = [
        'anggota' => 'array'
    ];

    // relasi dengan pegawai
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
