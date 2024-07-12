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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('merk', 30);
            $table->string('pemilik', 40);
            $table->string('nopol', 20);
            $table->integer('thn_beli');
            $table->string('deskripsi', 200);
            $table->integer('kapasitas_kursi');
            $table->integer('rating');
            $table->integer('jenis_id')->index('fk_kendaraan_jenis_idx');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};
