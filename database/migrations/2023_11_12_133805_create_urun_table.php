<?php

use Carbon\Traits\Timestamp;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void //veritabnını yüklerken migrate işlemi yapılırken çalışır
    {
        Schema::create('urun', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug',160);
            $table->string('urun_adi');
            $table->double('fiyatı',6,3);
            //$table->text('aciklama');
            $table->timestamps(); //oluşturulma ve güncelleme tarihlerini ekler.
            $table->softDeletes();
            

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //rollback işlemi yapılırken
    {
        Schema::dropIfExists('urun');
    }
};
