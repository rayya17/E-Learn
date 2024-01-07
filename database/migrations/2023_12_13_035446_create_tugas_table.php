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
        Schema::create('tugas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('materi_id');
            $table->foreign('materi_id')->references('id')->on('materis')->onDelete('cascade');
            $table->string('file_tugas');
            $table->string('tugas');
            $table->string('detail_tugas');
            $table->integer('point');
            $table->enum('tingkat_kesulitan',['mudah','sedang','sulit']);
            $table->date('tanggal_tugas');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugas');
    }
};
