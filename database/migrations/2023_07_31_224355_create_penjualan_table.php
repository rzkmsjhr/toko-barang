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
    Schema::create('penjualan', function (Blueprint $table) {
        $table->integer('Id_Penjualan')->unsigned()->primary();
        $table->date('Tgl_Penjualan')->nullable();
        $table->string('Nama_Konsumen', 50)->nullable();
        $table->string('Alamat', 100)->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};
