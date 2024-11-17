<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanKomentarTable extends Migration
{
    public function up()
    {
        Schema::create('pengajuan_komentar', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->unsignedBigInteger('pengajuan_id'); // Foreign Key ke tabel pengajuan
            $table->unsignedBigInteger('id_surat'); // ID Surat
            $table->text('komentar'); // Kolom komentar
            $table->enum('status', ['proses', 'disetujui', 'ditolak', 'perbaiki'])->default('proses'); // Status
            $table->timestamps(); // Created at & Updated at

            // Foreign key constraint (jika ada relasi dengan tabel lain)
            $table->foreign('pengajuan_id')->references('id')->on('pengajuans')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengajuan_komentar');
    }
}

