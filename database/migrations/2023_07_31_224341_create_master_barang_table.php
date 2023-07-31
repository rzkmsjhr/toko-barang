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
    Schema::create('master_barang', function (Blueprint $table) {
        $table->integer('Kode_Barang')->unsigned()->primary();
        $table->string('Nama_Barang', 50)->nullable();
        $table->decimal('Harga_Jual', 10, 2)->nullable();
        $table->decimal('Harga_Beli', 10, 2)->nullable();
        $table->integer('Stok')->nullable();
        $table->string('Kategori', 50)->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_barang');
    }
};
