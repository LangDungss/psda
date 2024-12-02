<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengajuan_cuti', function (Blueprint $table) {
            $table->id(); // bigint(20) UNSIGNED AUTO_INCREMENT primary key
            $table->unsignedBigInteger('pegawai_id'); // Foreign key
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
            $table->unsignedInteger('lama_cuti');
            $table->string('alamat_cuti');
            $table->json('catatan_cuti')->nullable();
            $table->string('status')->default('Proses');
            $table->timestamps(); // created_at & updated_at

            // Optional: tambahkan foreign key constraint jika ada
            // $table->foreign('pegawai_id')->references('id')->on('pegawai')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_cutis');
    }
};
