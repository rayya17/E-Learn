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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            // $table->string('nama');
            // $table->string('email')->unique();
            // $table->string('password');
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->string('foto_profile');
            $table->string('notelp');
            $table->date('tanggal_lahir')->nullable();
            $table->string('pendidikan');
            $table->string('alamat');
            $table->string('foto_sertifikat');
            $table->string('foto_ktp');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
