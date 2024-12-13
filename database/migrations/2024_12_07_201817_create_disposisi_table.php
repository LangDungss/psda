<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisposisiTable extends Migration
{
    public function up()
    {
        Schema::create('disposisi', function (Blueprint $table) {
            $table->id();
            $table->string('surat_dari');
            $table->date('diterima');
            $table->date('tanggal_surat');
            $table->string('nomor_surat');
            $table->string('nomor_agenda');
            $table->string('hal');
            $table->text('catatan_sekretaris')->nullable();
            $table->string('diteruskan_kepada');
            $table->text('tindak_lanjut')->nullable();
            $table->text('catatan_kepaladinas')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('disposisi');
    }
}
