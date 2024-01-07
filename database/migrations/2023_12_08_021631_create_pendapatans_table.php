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
        Schema::create('pendapatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreignUuid('order_id')->references('id')->on('orders')->cascadeOnDelete();
            $table->unsignedBigInteger('pendapatan');
            $table->timestamps();
        });
        Schema::table('penarikansaldos', function (Blueprint $table){
            $table->foreignId('pendapatan_id')->nullable()->constrained('pendapatans')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendapatans');
    }
};
