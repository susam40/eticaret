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
        Schema::create('kategori_urun', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kategori_id')->insigned(); //insigned negatif sayıların kullanılmayacağı anlamına gelir.
            $table->integer('urun_id')->insignet();

            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade'); //foregn anahtar tanımlanır.
            $table->foreign('urun_id')->references('id')->on('urun')->onDelete('cascade'); //urun ile id si birbirine bağlanır.
            //tablolar birbiri ile ilişkilendirildi.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_urun');
    }
};
