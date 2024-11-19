<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanCutiTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengajuan_cuti', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pegawai_id');  // Menambahkan kolom pegawai_id
            $table->string('nomor_surat')->nullable();
            $table->string('nama');
            $table->string('nip');
            $table->string('jabatan');
            $table->string('masa_kerja');
            $table->string('unit_kerja');
            $table->enum('jenis_cuti', [
                'Cuti Tahunan',
                'Cuti Besar',
                'Cuti Sakit',
                'Cuti Melahirkan',
                'Cuti Alasan Penting',
                'Cuti Lain-lain'
            ]);
            $table->text('alasan_cuti');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('alamat_cuti');
            $table->string('status')->default('Pending'); // Status pengajuan (Pending, Disetujui, Ditolak)
            $table->text('catatan')->nullable(); // Catatan untuk pertimbangan atasan langsung
            $table->timestamps();
    
            // Menambahkan foreign key untuk pegawai_id
            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onDelete('cascade');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_cuti');
    }
}
