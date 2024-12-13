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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('kepada'); // Kepada Yth
            $table->string('dari'); // Dari
            $table->date('tanggal'); // Tanggal
            $table->string('nomor'); // Nomor Surat
            $table->string('sifat'); // Sifat
            $table->string('hal'); // Hal
            $table->text('dasar'); // Dasar
            $table->string('urusan'); // Urusan
            $table->string('tujuan'); // Tujuan
            $table->string('lama_perjalanan'); // Lama Perjalanan Dinas
            $table->string('sumber_pembayaran'); // Sumber Pembayaran

            // Menyimpan jumlah anggota yang berpergian
            $table->unsignedInteger('jumlah_berpergian')->default(1);

            // Data Staf Pendamping (menggunakan JSON untuk fleksibilitas)
            $table->json('staf_pendamping')->nullable(); 

            // Data Pejabat yang bertugas
            $table->string('pejabat_nama');
            $table->string('pejabat_pangkat');
            $table->string('pejabat_nip');
            $table->string('pejabat_jabatan');

            // Transportasi yang digunakan
            $table->string('transportasi');
            $table->enum('status', ["proses", "ditolak", "disetujui", "perbaiki"])->default("proses");

            // Status validasi
            $table->boolean('is_admin')->default(0);

            // Status validasi oleh sekretaris
            $table->enum('status_sekretaris', ['belum_dikonfirmasi', 'disetujui', 'ditolak'])->default('belum_dikonfirmasi');

            // Hubungan dengan pegawai
            $table->unsignedBigInteger('pegawai_id');
            $table->timestamps();

            // Relasi dengan tabel pegawais
            $table->foreign('pegawai_id')->references('id')->on('pegawais')->onDelete('cascade');
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


