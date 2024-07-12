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
        Schema::create('area_parkir', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nama', 30);
            $table->integer('kapasitas');
            $table->string('keterangan', 45);
            $table->integer('kampus_id')->index('fk_area_parkir_kampus1_idx');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('area_parkir');
    }
};
