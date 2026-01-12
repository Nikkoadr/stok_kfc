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
        // Tabel Produk
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('kode_produk')->unique();
            $table->string('nama_produk');
            $table->string('satuan_besar')->default('Pack');
            $table->integer('isi_per_satuan');
            $table->string('satuan_kecil')->default('Pcs');
            $table->timestamps();
        });

        // Tabel Stok Harian (Penampung sisa malam)
        Schema::create('stok_harian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produk_id')->constrained('produk');
            $table->date('tanggal');
            $table->integer('sisa_malam_pcs');
            $table->boolean('status_olahan')->default(false);
            $table->timestamps();
        });

        // Tabel Detail Opname (Perhitungan Selisih)
        Schema::create('detail_stok_opname', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produk_id')->constrained('produk');
            $table->integer('stok_sistem_pcs');
            $table->integer('fisik_pack_sisa'); // Contoh: 9
            $table->integer('fisik_pcs_sisa');  // Contoh: 5
            $table->integer('total_fisik_pcs'); // Hasil: 95
            $table->integer('selisih_pcs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
