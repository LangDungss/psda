<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pengajuans';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kepada',
        'dari',
        'tanggal',
        'nomor',
        'sifat',
        'hal',
        'dasar',
        'urusan',
        'tujuan',
        'lama_perjalanan',
        'sumber_pembayaran',
        'jumlah_berpergian',
        'staf_pendamping',
        'pejabat_nama',
        'pejabat_pangkat',
        'pejabat_nip',
        'pejabat_jabatan',
        'transportasi',
        'is_admin',
        'pegawai_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'tanggal' => 'date',
        'tgl_berangkat' => 'date',
        'tgl_kembali' => 'date',
        'jml_hari' => 'integer',
        'jumlah_berpergian' => 'integer',
        'staf_pendamping' => 'array',
        'is_admin' => 'boolean',
    ];

    /**
     * Get the related pegawai.
     */
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    /**
     * Set staf_pendamping attribute as array.
     *
     * @param  array  $value
     * @return void
     */
    public function setStafPendampingAttribute($value)
    {
        $this->attributes['staf_pendamping'] = json_encode($value);
    }

    /**
     * Get staf_pendamping attribute as array.
     *
     * @param  string  $value
     * @return array
     */
    public function getStafPendampingAttribute($value)
    {
        return json_decode($value, true);
    }

    
    public function komentar()
    {
        return $this->hasMany(PengajuanKomentar::class, 'pengajuan_id', 'id');
        // 'pengajuan_id' adalah foreign key di tabel pengajuan_komentar
        // 'id' adalah primary key di tabel pengajuan
    }
    
    
    

}
