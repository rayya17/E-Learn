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
        Schema::create('detail_materis', function (Blueprint $table) {
            $table->id();
            $table->ForeignId('materi_id')->references('id')->on('materis')->onUpdate('cascade');
            $table->ForeignId('guru_id')->references('id')->on('gurus')->onUpdate('cascade');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_materis');
    }
};
