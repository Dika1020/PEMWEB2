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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->integer('id', true);
            $table->date('tanggal');
            $table->time('mulai');
            $table->time('akhir');
            $table->string('keterangan', 100);
            $table->double('biaya');
            $table->integer('kendaraan_id')->index('fk_transaksi_kendaraan1_idx');
            $table->integer('area_parkir_id')->index('fk_transaksi_area_parkir1_idx');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
