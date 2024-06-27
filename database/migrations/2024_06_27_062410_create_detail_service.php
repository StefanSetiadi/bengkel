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
        Schema::create('detail_service', function (Blueprint $table) {
            $table->id('id_detail_service');
            $table->unsignedBigInteger('id_service');
            $table->unsignedBigInteger('id_sparepart');
            $table->string('no_kendaraan');
            $table->integer('biaya_jasa');
            $table->integer('total_biaya');
            $table->boolean('status_pembayaran');
            $table->timestamps();

            $table->foreign('id_service')->references('id_service')->on('service');
            $table->foreign('id_sparepart')->references('id_sparepart')->on('sparepart');
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
        Schema::table('sparepart', function (Blueprint $table) {
            $table->dropForeign(['id_sparepart']);
        });
        Schema::dropIfExists('detail_service');
    }
};
