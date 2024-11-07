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
        'sumber_anggaran',
        'anggota', // json
        'transportasi',
        'pegawai_id'
    ];

    // Pastikan tipe kolom 'anggota' di database adalah JSON
    protected $casts = [
        'anggota' => 'array'
    ];

    /**
     * Relasi ke model Pegawai
     * Pastikan model Pegawai sudah ada dan relasi hasMany ditambahkan di sana
     */
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    /**
     * Accessor untuk menghitung jumlah hari secara otomatis
     * jika tidak disimpan dalam database
     */
    public function getJmlHariAttribute()
    {
        if ($this->tgl_berangkat && $this->tgl_kembali) {
            $tglBerangkat = \Carbon\Carbon::parse($this->tgl_berangkat);
            $tglKembali = \Carbon\Carbon::parse($this->tgl_kembali);
            return $tglBerangkat->diffInDays($tglKembali);
        }
        return 0;
    }
}
