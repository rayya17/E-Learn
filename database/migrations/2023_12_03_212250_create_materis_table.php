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
            $table->string('mapel');
            $table->string('nama_materi');
            $table->string('file_materi');
            $table->string('kelas');
            $table->string('harga');
            $table->string('deskripsi');
            $table->string('tugas');
            $table->string('detail_tugas');
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
