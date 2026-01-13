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

        // Tabel Stok Harian (Penampung sisa malam)
        Schema::create('stok_harian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produk_id')->constrained('produk');
            $table->date('tanggal');
            $table->integer('sisa_malam_pcs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_harian');
    }
};
