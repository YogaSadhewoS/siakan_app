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
        Schema::create('kartografis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipe_id');
            $table->string('fonds');
            $table->string('seri_arsip');
            $table->string('file')->nullable();
            $table->integer('nomor_urut');
            $table->string('kode')->unique();
            $table->string('judul');
            $table->text('isi_informasi')->nullable();
            $table->date('kurun_waktu');
            $table->string('volume');
            $table->string('ukuran');
            $table->string('warna');
            $table->string('cetak_tulis');
            $table->string('tinta_pensil');
            $table->string('asli_fotokopi');
            $table->string('penerbit')->nullable();
            $table->string('skala');
            $table->text('referensi');
            // $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kartografis');
    }
};
