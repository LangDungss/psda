<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    // data yang boleh diisi
    protected $fillable = ['nama_divisi', 'bidang_id'];

    // relasi one to one dengan bidang
    public function bidang()
    {
        return $this->belongsTo(Bidang::class);
    }

    // relasi one to many dengan pegawai
    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
}
