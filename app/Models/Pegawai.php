<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pegawai extends Authenticatable
{
    use Notifiable;
    protected $guard = 'pegawai';

    protected $fillable = [
        'nama',
        'nip',
        'kelamin',
        'email',
        'password',
        'divisi_id',
        'bidang_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // relasi one to one dengan divisi
    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }

    // relasi one to one dengan bidang
    public function bidang()
    {
        return $this->belongsTo(Bidang::class);
    }

    // relasi one to many dengan pengajuan
    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class);
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
