<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            // $table->string('no_pengajuan');
            // $table->string('nama_pengaju');
            $table->string('kepada');
            $table->string('perihal');
            $table->date('tgl_berangkat');
            $table->date('tgl_kembali');
            $table->date('jml_hari');
            $table->string('sumber_anggaran');
            $table->json('anggota');
            $table->string('transportasi');
            $table->boolean('is_admin')->default(0);
            $table->unsignedBigInteger('pegawai_id');
            $table->timestamps();

            // $table->foreign('bidang_id')->references('id')->on('bidangs');
            // $table->foreign('divisi_id')->references('id')->on('divisis');
            $table->foreign('pegawai_id')->references('id')->on('pegawais');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
