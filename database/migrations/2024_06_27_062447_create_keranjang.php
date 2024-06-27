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
        Schema::create('keranjang', function (Blueprint $table) {
            $table->id('id_keranjang');
            $table->unsignedBigInteger('id_customer');
            $table->unsignedBigInteger('id_sparepart');
            $table->timestamps();

            $table->foreign('id_customer')->references('id_customer')->on('customers');
            $table->foreign('id_sparepart')->references('id_sparepart')->on('sparepart');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropForeign(['id_customer']);
        });
        Schema::table('sparepart', function (Blueprint $table) {
            $table->dropForeign(['id_sparepart']);
        });
        Schema::dropIfExists('keranjang');
    }
};
