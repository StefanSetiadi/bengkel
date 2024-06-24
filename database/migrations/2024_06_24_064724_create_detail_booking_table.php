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
        Schema::create('detail_booking', function (Blueprint $table) {
            $table->id('id_detail_booking');
            $table->unsignedBigInteger('id_booking');
            $table->unsignedBigInteger('id_service');
            $table->unsignedBigInteger('id_sparepart');
            $table->integer('jumlah');
            $table->integer('total');
            $table->timestamps();

            $table->foreign('id_booking')->references('id_booking')->on('booking');
            $table->foreign('id_service')->references('id_service')->on('service');
            $table->foreign('id_sparepart')->references('id_sparepart')->on('sparepart');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('booking', function (Blueprint $table) {
            $table->dropForeign(['id_booking']);
        });
        Schema::table('service', function (Blueprint $table) {
            $table->dropForeign(['id_service']);
        });
        Schema::table('service', function (Blueprint $table) {
            $table->dropForeign(['id_sparepart']);
        });
        Schema::dropIfExists('detail_booking');
    }
};
