<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        Produk::insert([
            // KELOMPOK 01: AYAM & OLAHAN
            ['kode_produk' => '01-1002', 'nama_produk' => 'AYAM BROILER 7 PCS NON ABOB', 'satuan_besar' => 'HEAD', 'isi_per_satuan' => 1, 'satuan_kecil' => 'PCS'],
            ['kode_produk' => '01-2102', 'nama_produk' => 'WING (PARTING 2)', 'satuan_besar' => 'SET', 'isi_per_satuan' => 1, 'satuan_kecil' => 'SET'],
            ['kode_produk' => '01-5006', 'nama_produk' => 'CHICKEN PATTY KFC (20PCK @8PCS)', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 8, 'satuan_kecil' => 'PCS'],
            ['kode_produk' => '01-5007', 'nama_produk' => 'DELUXE PATTIES KFC (20PCK @10PCS)', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 10, 'satuan_kecil' => 'PCS'],
            ['kode_produk' => '01-5008', 'nama_produk' => 'HOT& SPICY PATTY KFC (5PCK @16PCS)', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 16, 'satuan_kecil' => 'PCS'],
            ['kode_produk' => '01-7003', 'nama_produk' => 'CHICKEN STRIP MARINATED 10,4 KGS/CTN', 'satuan_besar' => 'CTN', 'isi_per_satuan' => 1, 'satuan_kecil' => 'KGS'],
            ['kode_produk' => '01-7016', 'nama_produk' => 'CHICKEN BALL (16PCK @33PCS)', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 33, 'satuan_kecil' => 'PCS'],
            ['kode_produk' => '01-7020', 'nama_produk' => 'CHICKEN CHUNK (25PCK @300GR)', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 300, 'satuan_kecil' => 'GRM'],
            ['kode_produk' => '01-7021', 'nama_produk' => 'WONTON AYAM (10PCK @20PCS)', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 20, 'satuan_kecil' => 'PCS'],
            ['kode_produk' => '01-7022', 'nama_produk' => 'TAHU ISI (10PCK @20PCS)', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 20, 'satuan_kecil' => 'PCS'],

            // KELOMPOK 02: VEGETABLES & RICE
            ['kode_produk' => '02-1011', 'nama_produk' => 'FF SHOESTRING (COATED)', 'satuan_besar' => 'BAG', 'isi_per_satuan' => 2, 'satuan_kecil' => 'KG'],
            ['kode_produk' => '02-2201', 'nama_produk' => 'MIXED VEGETABLES 3 WAYS (24X250GR)', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 250, 'satuan_kecil' => 'GRM'],
            ['kode_produk' => '02-2202', 'nama_produk' => 'FRZ WHOLE KERNEL SWEET CORN', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 500, 'satuan_kecil' => 'GRM'],
            ['kode_produk' => '02-2506', 'nama_produk' => 'BERAS ORGANIK (10PCK @2KG)', 'satuan_besar' => 'BAL', 'isi_per_satuan' => 2, 'satuan_kecil' => 'KG'],
            ['kode_produk' => '02-3035', 'nama_produk' => 'BUN PREMIUM (48PCS/CTN)', 'satuan_besar' => 'CTN', 'isi_per_satuan' => 48, 'satuan_kecil' => 'PCS'],
            ['kode_produk' => '02-4001', 'nama_produk' => 'CHICKEN CREAM SOUP (100PCK @83GR)', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 83, 'satuan_kecil' => 'GRM'],
            ['kode_produk' => '02-4006', 'nama_produk' => 'PERKEDEL KENTANG (14PCK @12PCS)', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 12, 'satuan_kecil' => 'PCS'],

            // KELOMPOK 03: DAIRY & FRESH
            ['kode_produk' => '03-4001', 'nama_produk' => 'TELUR AYAM (16PCS/KG)', 'satuan_besar' => 'KG', 'isi_per_satuan' => 16, 'satuan_kecil' => 'PCS'],
            ['kode_produk' => '03-7029', 'nama_produk' => 'KOLANG KALING (24X360GR)', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 360, 'satuan_kecil' => 'GRM'],
            ['kode_produk' => '03-8022', 'nama_produk' => 'CHEESE SLICE (24PCK @10PCS)', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 10, 'satuan_kecil' => 'PCS'],
            ['kode_produk' => '03-8029', 'nama_produk' => 'UNSALTED BUTTER 200GR', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 200, 'satuan_kecil' => 'GRM'],
            ['kode_produk' => '03-9101', 'nama_produk' => 'ROASTED CASHEW (16PCK @250GR)', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 250, 'satuan_kecil' => 'GRM'],

            // KELOMPOK 04: CONDIMENTS
            ['kode_produk' => '04-2002', 'nama_produk' => 'HOT SPICY MARINADE (18PCK @680GR)', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 680, 'satuan_kecil' => 'GRM'],
            ['kode_produk' => '04-3001', 'nama_produk' => 'GARAM RESTAURANT 1000SCT/PCK', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 1000, 'satuan_kecil' => 'SCT'],
            ['kode_produk' => '04-3212', 'nama_produk' => 'SUGAR STICK KFC (10PCK @250PCS)', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 250, 'satuan_kecil' => 'PCS'],
            ['kode_produk' => '04-3301', 'nama_produk' => 'BAWANG GORENG (10SCT @100GR)', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 100, 'satuan_kecil' => 'GRM'],
            ['kode_produk' => '04-3402', 'nama_produk' => 'BUMBU CHICKEN SOUP (10SCT/PCK)', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 10, 'satuan_kecil' => 'SCT'],
            ['kode_produk' => '04-3422', 'nama_produk' => 'MASAKO AYAM (72SCT/PCK)', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 72, 'satuan_kecil' => 'SCT'],
            ['kode_produk' => '04-3423', 'nama_produk' => 'TUDUNG BUMBU NASI UDUK (6SET/PCK)', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 6, 'satuan_kecil' => 'SET'],

            // KELOMPOK 05: BEVERAGES
            ['kode_produk' => '05-2010', 'nama_produk' => 'AQUA 330ML (24BTL/CTN)', 'satuan_besar' => 'CTN', 'isi_per_satuan' => 24, 'satuan_kecil' => 'BTL'],
            ['kode_produk' => '05-2017', 'nama_produk' => 'ICHI OCHA 350ML (24BTL/CTN)', 'satuan_besar' => 'CTN', 'isi_per_satuan' => 24, 'satuan_kecil' => 'BTL'],
            ['kode_produk' => '05-2308', 'nama_produk' => 'BIB COCA COLA 10 LTR', 'satuan_besar' => 'CTN', 'isi_per_satuan' => 10, 'satuan_kecil' => 'LTR'],
            ['kode_produk' => '05-2309', 'nama_produk' => 'BIB SPRITE 10 LTR', 'satuan_besar' => 'CTN', 'isi_per_satuan' => 10, 'satuan_kecil' => 'LTR'],
            ['kode_produk' => '05-2310', 'nama_produk' => 'BIB FANTA STRAWBERRY 10 LTR', 'satuan_besar' => 'CTN', 'isi_per_satuan' => 10, 'satuan_kecil' => 'LTR'],

            // KELOMPOK 08: PACKAGING
            ['kode_produk' => '08-1023', 'nama_produk' => 'CUP KFC FLOAT 14 OZ (20X50PCS)', 'satuan_besar' => 'Pack', 'isi_per_satuan' => 50, 'satuan_kecil' => 'PCS'],
            ['kode_produk' => '08-1038', 'nama_produk' => 'CUP CREAM SOUP (1000PCS/CTN)', 'satuan_besar' => 'CTN', 'isi_per_satuan' => 1000, 'satuan_kecil' => 'PCS'],
            ['kode_produk' => '08-1053', 'nama_produk' => 'CUP SAUCE PET (20000PCS/CTN)', 'satuan_besar' => 'CTN', 'isi_per_satuan' => 20000, 'satuan_kecil' => 'PCS'],

            // KELOMPOK LAIN-LAIN
            ['kode_produk' => '06-1002', 'nama_produk' => 'FRYING OIL 18 KGS', 'satuan_besar' => 'TIN', 'isi_per_satuan' => 18, 'satuan_kecil' => 'KG'],
            ['kode_produk' => '09-1017', 'nama_produk' => 'HAND SOAP 5 LTR', 'satuan_besar' => 'JRG', 'isi_per_satuan' => 5, 'satuan_kecil' => 'LTR'],
            ['kode_produk' => '93-7005', 'nama_produk' => 'ISI TABUNG GAS 50 KG', 'satuan_besar' => 'TBG', 'isi_per_satuan' => 50, 'satuan_kecil' => 'KG'],
            ['kode_produk' => 'B1-0002', 'nama_produk' => 'AYAM MARINADE HCC', 'satuan_besar' => 'HEAD', 'isi_per_satuan' => 1, 'satuan_kecil' => 'HEAD'],
        ]);
    }
}
