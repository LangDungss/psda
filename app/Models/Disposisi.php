<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi (opsional)
    protected $table = 'disposisi';

    // Tentukan kolom-kolom yang dapat diisi (mass assignment)
    protected $fillable = [
        'surat_dari',
        'diterima',
        'tanggal_surat',
        'nomor_surat',
        'nomor_agenda',
        'hal',
        'catatan_sekretaris',
        'diteruskan_kepada',
        'tindak_lanjut',
        'catatan_kepaladinas',
    ];

    // Tentukan kolom yang harus diperlakukan sebagai tanggal
    protected $dates = [
        'diterima',
        'tanggal_surat',
    ];
}
