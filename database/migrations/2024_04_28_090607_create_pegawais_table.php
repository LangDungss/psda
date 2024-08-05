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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('divisi_id');
            $table->unsignedBigInteger('bidang_id');
            $table->timestamps();

            $table->foreign('divisi_id')->references('id')->on('divisis');
            $table->foreign('bidang_id')->references('id')->on('bidangs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
