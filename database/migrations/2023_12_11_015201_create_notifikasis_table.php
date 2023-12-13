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
        Schema::create('notifikasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sender_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('materi_id')->nullable();
            $table->unsignedBigInteger('ulasan_id')->nullable();
            $table->unsignedBigInteger('penarikan_id')->nullable();
            $table->text('title');
            $table->text('message');
            $table->boolean('markRead')->default(false);
            $table->timestamps();

            $table->foreign('sender_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('materi_id')->references('id')->on('materis')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ulasan_id')->references('id')->on('ulasans')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('penarikan_id')->references('id')->on('penarikansaldos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifikasis');
    }
};
