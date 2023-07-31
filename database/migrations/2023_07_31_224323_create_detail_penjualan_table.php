<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('detail_penjualan', function (Blueprint $table) {
        $table->integer('Id_Penjualan')->unsigned();
        $table->integer('Kode_Barang')->unsigned();
        $table->integer('Jumlah')->nullable();
        $table->decimal('Harga_Satuan', 10, 2)->nullable();
        $table->decimal('Harga_Total', 10, 2)->nullable();

        $table->primary(['Id_Penjualan', 'Kode_Barang']);

        $table->foreign('Id_Penjualan')->references('Id_Penjualan')->on('penjualan')->onDelete('cascade');
        $table->foreign('Kode_Barang')->references('Kode_Barang')->on('master_barang')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_penjualan');
    }
};
