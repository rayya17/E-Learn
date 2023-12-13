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
        Schema::create('penarikansaldos', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('guru_id')->nullable()->constrained('gurus')->onUpdate('cascade');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade');
            $table->string('metodepembayaran')->nullable();
            $table->string('keterangan_pengajuan')->nullable();
            $table->string('tujuan_pengajuan')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penarikansaldos');
    }
};
