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
        Schema::table('transaksi', function (Blueprint $table) {
            $table->foreign(['area_parkir_id'], 'fk_transaksi_area_parkir1')->references(['id'])->on('area_parkir')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['kendaraan_id'], 'fk_transaksi_kendaraan1')->references(['id'])->on('kendaraan')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksi', function (Blueprint $table) {
            $table->dropForeign('fk_transaksi_area_parkir1');
            $table->dropForeign('fk_transaksi_kendaraan1');
        });
    }
};
