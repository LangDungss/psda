<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;

    // data yang boleh diisi
    protected $fillable = ['nama_bidang'];

    // relasi one to many dengan divisi
    public function divisi()
    {
        return $this->hasMany(Divisi::class);
    }
}
