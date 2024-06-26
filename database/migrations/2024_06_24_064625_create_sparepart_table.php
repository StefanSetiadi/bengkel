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
            $table->unsignedBigInteger('id_kategori_sparepart');
            $table->string('nama', 20);
            $table->integer('harga');
            $table->integer('jumlah');
            $table->string('kategori');
            $table->text('deskripsi')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('id_kategori_sparepart')->references('id_kategori_sparepart')->on('kategori_sparepart');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kategori_sparepart', function (Blueprint $table) {
            $table->dropForeign(['id_kategori_sparepart']);
        });
        Schema::dropIfExists('sparepart');
    }
};
