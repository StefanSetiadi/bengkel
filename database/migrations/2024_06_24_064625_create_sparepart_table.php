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
        Schema::create('sparepart', function (Blueprint $table) {
            $table->id('id_sparepart');
            $table->unsignedBigInteger('id_kategori_service');
            $table->string('nama');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->text('deskripsi')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('id_kategori_service')->references('id_kategori_service')->on('kategori_service');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kategori_service', function (Blueprint $table) {
            $table->dropForeign(['id_kategori_service']);
        });
        Schema::dropIfExists('sparepart');
    }
};
