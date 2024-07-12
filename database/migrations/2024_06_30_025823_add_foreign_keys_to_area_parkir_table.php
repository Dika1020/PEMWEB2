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
        Schema::table('area_parkir', function (Blueprint $table) {
            $table->foreign(['kampus_id'], 'fk_area_parkir_kampus1')->references(['id'])->on('kampus')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('area_parkir', function (Blueprint $table) {
            $table->dropForeign('fk_area_parkir_kampus1');
        });
    }
};
