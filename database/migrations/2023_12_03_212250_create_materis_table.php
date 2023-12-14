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
        Schema::create('materis', function (Blueprint $table) {
            $table->id();
            $table->string('cover')->default('defaultmateri.jpeg');
            $table->ForeignId('guru_id')->references('id')->on('gurus')->onUpdate('cascade');
            $table->string('mapel');
            $table->string('nama_materi');
            $table->string('kelas');
            $table->string('harga');
            $table->string('deskripsi');
            $table->date('tanggal_tugas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materis');
    }
};
