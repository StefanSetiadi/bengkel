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
            $table->unsignedBigInteger('id_service');
            $table->string('nama', 20);
            $table->integer('harga');
            $table->integer('jumlah');
            $table->string('kategori')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('id_service')->references('id_service')->on('service');

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
        Schema::dropIfExists('sparepart');
    }
};
