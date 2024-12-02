<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuancutiKomentarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuancuti_komentar', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('pengajuancuti_id') // Foreign key ke tabel pengajuan_cuti
            //       ->constrained('pengajuan_cuti') // Nama tabel relasi
            //       ->onDelete('cascade'); // Hapus komentar jika pengajuan dihapus
            $table->text('komentar'); // Kolom untuk komentar
            $table->string('status')->default('Pending'); // Kolom untuk status (Pending/Disetujui/Ditolak)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuancuti_komentar');
    }
}

