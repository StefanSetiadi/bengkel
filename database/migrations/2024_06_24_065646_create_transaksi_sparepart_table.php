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
        Schema::create('transaksi_sparepart', function (Blueprint $table) {
            $table->id('id_transaksi_sparepart');
            $table->unsignedBigInteger('id_transaksi');
            $table->unsignedBigInteger('id_sparepart');
            $table->integer('jumlah');
            $table->integer('total');
            $table->timestamps();

            $table->foreign('id_transaksi')->references('id_transaksi')->on('transaksi');
            $table->foreign('id_sparepart')->references('id_sparepart')->on('sparepart');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksi', function (Blueprint $table) {
            $table->dropForeign(['id_transaksi']);
        });
        Schema::table('sparepart', function (Blueprint $table) {
            $table->dropForeign(['id_sparepart']);
        });
        Schema::dropIfExists('transaksi_sparepart');
    }
};
