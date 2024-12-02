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
        Schema::create('pengajuancuti_komentar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengajuan_cuti_id') // Foreign key ke tabel pengajuan_cuti
                  ->constrained('pengajuan_cuti') // Nama tabel relasi
                  ->onDelete('cascade'); // Hapus komentar jika pengajuan dihapus
            $table->text('komentar'); // Kolom untuk komentar
            $table->string('status')->default('Pending'); // Kolom untuk status (Pending/Disetujui/Ditolak)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuancuti_komentar');
    }
};
