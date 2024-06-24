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
        Schema::create('booking_service', function (Blueprint $table) {
            $table->id('id_booking_service');
            $table->unsignedBigInteger('id_booking');
            $table->unsignedBigInteger('id_service');
            $table->integer('jumlah');
            $table->integer('total');
            $table->timestamps();

            $table->foreign('id_booking')->references('id_booking')->on('booking');
            $table->foreign('id_service')->references('id_service')->on('service');
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
        Schema::dropIfExists('booking_service');
    }
};
