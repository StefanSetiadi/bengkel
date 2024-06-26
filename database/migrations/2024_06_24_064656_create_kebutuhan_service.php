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
        Schema::create('kebutuhan_service', function (Blueprint $table) {
            $table->id('id_kebutuhan_service');
            $table->unsignedBigInteger('id_service');
            $table->unsignedBigInteger('id_kategori_sparepart');
            $table->timestamps();

            $table->foreign('id_service')->references('id_service')->on('service');
            $table->foreign('id_kategori_sparepart')->references('id_kategori_sparepart')->on('kategori_sparepart');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('service', function (Blueprint $table) {
            $table->dropForeign(['id_service']);
        });
        Schema::table('kategori_sparepart', function (Blueprint $table) {
            $table->dropForeign(['id_kategori_sparepart']);
        });
        Schema::dropIfExists('kebutuhan_service');
    }
};
