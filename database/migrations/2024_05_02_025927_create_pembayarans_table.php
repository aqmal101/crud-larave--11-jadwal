<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id('nis');
            $table->string('nama');
            $table->string('kelas');
            $table->integer('bayar_jan');
            $table->integer('bayar_feb');
            $table->integer('bayar_mar');
            $table->integer('bayar_apr');
            $table->integer('bayar_mei');
            $table->integer('bayar_jun');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};