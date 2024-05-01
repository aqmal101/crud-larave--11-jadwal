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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id('kd_bayar');
            $table->string('nim');
            $table->string('semester');
            $table->string('thn_ajar');
            $table->string('jml_bayar');
            $table->date('tgl_bayar');
            $table->string('mtd_bayar');
            $table->string('sts_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};