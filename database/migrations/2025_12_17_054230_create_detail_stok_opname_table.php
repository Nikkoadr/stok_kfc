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

        Schema::create('detail_stok_opname', function (Blueprint $table) {
            $table->id();

            $table->foreignId('produk_id')->constrained('produk');
            $table->foreignId('stok_harian_id')->constrained('stok_harian');
            $table->integer('isi_per_satuan');
            $table->integer('stok_sistem_pcs');
            $table->integer('fisik_pack_sisa');
            $table->integer('fisik_pcs_sisa');
            $table->integer('total_fisik_pcs');
            $table->integer('selisih_pcs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_stok_opname');
    }
};
