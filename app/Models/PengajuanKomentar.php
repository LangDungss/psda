<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanKomentar extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_komentar'; // Nama tabel di database

    protected $fillable = [
        'pengajuan_id',
        'id_surat',
        'komentar',
        'status',
    ];

    // Relasi dengan tabel pengajuan
    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class, 'pengajuan_id', 'id');
        // 'pengajuan_id' adalah foreign key di tabel pengajuan_komentar
        // 'id' adalah primary key di tabel pengajuan
    }
}
