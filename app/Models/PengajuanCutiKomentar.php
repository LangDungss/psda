<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanCutiKomentar extends Model
{
    use HasFactory;

    // Tabel yang terkait dengan model ini
    protected $table = 'pengajuancuti_komentar';

    // Kolom yang dapat diisi
    protected $fillable = [
        'pengajuancuti_id',
        'komentar',
        'status',
    ];

    // Relasi ke model PengajuanCuti
    public function pengajuanCuti()
    {
        return $this->belongsTo(PengajuanCuti::class, 'pengajuancuti_id');
    }
}
