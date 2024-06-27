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
        Schema::create('service', function (Blueprint $table) {
            $table->id('id_service');
            $table->unsignedBigInteger('id_customer');
            $table->unsignedBigInteger('id_admin');
            $table->string('no_kendaraan');
            $table->integer('biaya_jasa');
            $table->integer('total_biaya');
            $table->boolean('status_pembayaran');
            $table->timestamps();

            $table->foreign('id_customer')->references('id_customer')->on('customers');
            $table->foreign('id_admin')->references('id_admin')->on('admin');
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
        Schema::table('admin', function (Blueprint $table) {
            $table->dropForeign(['id_admin']);
        });
        Schema::dropIfExists('service');
    }
};
