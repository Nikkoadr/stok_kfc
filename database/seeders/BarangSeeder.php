<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::insert([
            ['item' => '01-1002', 'description' => 'AYAM BROILER 7 PCS NON ABOB', 'conversion' => 'HEAD/PCS', 'perpack' => 1],
            ['item' => '01-2102', 'description' => 'WING (PARTING 2)', 'conversion' => 'SET', 'perpack' => 1],
            ['item' => '01-5006', 'description' => 'CHICKEN PATTY KFC, 160PCS (20PCK,@8PCS)', 'conversion' => 'PCS', 'perpack' => 1],
            ['item' => '01-5007', 'description' => 'DELUXE PATTIES KFC 10PCSX20 PCK/CTN', 'conversion' => 'PCS', 'perpack' => 1],
            ['item' => '01-5008', 'description' => 'HOT& SPICY PATTY KFC (16PCSX5PCK/CTN)', 'conversion' => 'PCS', 'perpack' => 1],
            ['item' => '01-7003', 'description' => 'CHICKEN STRIP MARINATED 10,4 KGS/CTN', 'conversion' => 'PCS', 'perpack' => 1],
            ['item' => '01-7016', 'description' => 'CHICKEN BALL@15GRM(16PCKX33 PCS/CTN)', 'conversion' => '33 PCS/PCK', 'perpack' => 1],
            ['item' => '01-7020', 'description' => 'CHICKEN CHUNK, 25 PCK X 300 GRM/CTN', 'conversion' => '300 GRM/PCK', 'perpack' => 1],
            ['item' => '01-7021', 'description' => 'WONTON AYAM @20GRM(10PCKX20PCS/CTN)', 'conversion' => '20 PCS/PCK', 'perpack' => 1],
            ['item' => '01-7022', 'description' => 'TAHU ISI @30GRM(10PCKX20PCS/CTN)', 'conversion' => '20 PCS/PCK', 'perpack' => 1],

            ['item' => '02-1011', 'description' => 'FF SHOESTRING (COATED)', 'conversion' => 'KG', 'perpack' => 1],
            ['item' => '02-2201', 'description' => 'MIXED VEGETABLES 3 WAYS (24X250GRM/CTN)', 'conversion' => '250 GRM/PCK', 'perpack' => 1],
            ['item' => '02-2202', 'description' => 'FRZ WHOLE KERNEL SWEET CORN12X500GRM/CTN', 'conversion' => '500 GRM/PCK', 'perpack' => 1],
            ['item' => '02-2506', 'description' => 'BERAS ORGANIK (10 PCKX2KGS/BAL)', 'conversion' => 'KG', 'perpack' => 1],
            ['item' => '02-3035', 'description' => 'BUN PREMIUM, 48 PCS/CTN', 'conversion' => 'PCS', 'perpack' => 1],
            ['item' => '02-4001', 'description' => 'CHICKEN CREAM SOUP, 100 PCK X 83 GRM/CTN', 'conversion' => 'SCT', 'perpack' => 1],
            ['item' => '02-4006', 'description' => 'PERKEDEL KENTANG BARU (14 PCKX12 PCS/CTN)', 'conversion' => 'PCS', 'perpack' => 1],

            ['item' => '03-1008', 'description' => 'LETUCCE', 'conversion' => 'KG', 'perpack' => 1],
            ['item' => '03-3001', 'description' => 'BAWANG BOMBAY', 'conversion' => 'KG', 'perpack' => 1],
            ['item' => '03-4001', 'description' => 'TELUR AYAM, 1 KG/16 PCS - 63 GRM', 'conversion' => 'PCS', 'perpack' => 1],
            ['item' => '03-7028', 'description' => 'SARIMI GORENG RASA AYAM KREMES DUA', 'conversion' => 'PCK', 'perpack' => 1],
            ['item' => '03-7029', 'description' => 'KOLANG KALING 24X360GRM/CTN', 'conversion' => '360 GRM/PCK', 'perpack' => 1],
            ['item' => '03-8022', 'description' => 'CHEESE SLICE, 24 PCK/CTN – 10 PCS/PCK', 'conversion' => 'PCS', 'perpack' => 1],
            ['item' => '03-8029', 'description' => 'UNSALTED BUTTER 200 GRM/PCK', 'conversion' => '200 GRM/PCK', 'perpack' => 1],
            ['item' => '03-9101', 'description' => 'ROASTED CASHEW 250 GRM X 16 PCK/CTN', 'conversion' => '250 GRM/PCK', 'perpack' => 1],
            ['item' => '03-9102', 'description' => 'CHOCOLATE TOPING, 5 KGS/PAIL', 'conversion' => 'KG', 'perpack' => 1],

            ['item' => '04-2002', 'description' => 'HOT SPICY MARINADE,18PCKX680 GRM/CTN', 'conversion' => 'PCK', 'perpack' => 1],
            ['item' => '04-3001', 'description' => 'GARAM RESTAURANT 1000 SCT/PCK', 'conversion' => 'SCT', 'perpack' => 1],
            ['item' => '04-3102', 'description' => 'MERICA RESTAURANT', 'conversion' => 'SCT', 'perpack' => 1],
            ['item' => '04-3201', 'description' => 'GULA PASIR', 'conversion' => 'GRM', 'perpack' => 1],
            ['item' => '04-3212', 'description' => 'SUGAR STICK KFC.LOGO, 8GRMX10PCKX250PCS', 'conversion' => '250 PCS/PCK', 'perpack' => 1],
            ['item' => '04-3301', 'description' => 'BAWANG GORENG(100GRMX10 SCT/PCK)', 'conversion' => '100 GRM/SCT', 'perpack' => 1],
            ['item' => '04-3402', 'description' => 'BUMBU CHICKEN SOUP,(40PCK X 10 SCT/CTN)', 'conversion' => 'SCT', 'perpack' => 1],
            ['item' => '04-3412', 'description' => 'BUMBU KENTANG GORENG BBQ KFC', 'conversion' => 'PCS', 'perpack' => 1],
            ['item' => '04-3422', 'description' => 'MASAKO AYAM 8,5 GRM, 72 SCT/PCK', 'conversion' => 'SCT', 'perpack' => 1],
            ['item' => '04-3423', 'description' => 'TUDUNG BUMBU NASI UDUK,12X6SET@27,5GRM', 'conversion' => '6 SET/PCK', 'perpack' => 1],

            ['item' => '05-2010', 'description' => 'AQUA 24 BTLX330 ML/CTN', 'conversion' => '1 BTL', 'perpack' => 1],
            ['item' => '05-2017', 'description' => 'ICHI OCHA, 24 BTL X 350 ML/CTN', 'conversion' => '1 BTL', 'perpack' => 1],
            ['item' => '05-2308', 'description' => 'BIB COCA COLA, 10 LTR/CTN', 'conversion' => '1 LTR', 'perpack' => 1],
            ['item' => '05-2309', 'description' => 'BIB SPRITE, 10 LTR/CTN', 'conversion' => '1 LTR', 'perpack' => 1],
            ['item' => '05-2310', 'description' => 'BIB FANTA STRAWBERRY, 10 LTR/CTN', 'conversion' => '1 LTR', 'perpack' => 1],
            ['item' => '05-2312', 'description' => 'FOC BIB COCA COLA ZERO, 10 LTR/CTN', 'conversion' => 'LTR', 'perpack' => 1],

            ['item' => '06-1002', 'description' => 'DEF OIL/KFC.FRYING OIL,18 KGS/TIN', 'conversion' => '18 KGS/TIN', 'perpack' => 1],
            ['item' => '07-9002', 'description' => 'PREMIX HCC', 'conversion' => '11.5 KGS/RCP', 'perpack' => 1],
            ['item' => '07-9092', 'description' => 'BAHAN SELEDRI,20 GRM/PCK', 'conversion' => '1 GRM', 'perpack' => 1],

            ['item' => '08-1023', 'description' => 'CUP KFC.FLOAT 14 OZ 20X50PCS', 'conversion' => '1 PCS', 'perpack' => 1],
            ['item' => '08-1038', 'description' => 'CUP CREAM SOUP, 1000PCS/CTN', 'conversion' => '1 PCS', 'perpack' => 1],
            ['item' => '08-1050', 'description' => 'CUP 5 OZ, 1000 PCS/CTN', 'conversion' => '1 PCS', 'perpack' => 1],
            ['item' => '08-1053', 'description' => 'CUP SAUCE PET, 20000 PCS/CTN', 'conversion' => '1 PCS', 'perpack' => 1],
            ['item' => '08-1059', 'description' => 'CUP SUNDAE KFC 8 OZ, 1000 PCS/CT', 'conversion' => '1 PCS', 'perpack' => 1],
            ['item' => '08-1060', 'description' => 'HOT CUP D/W INSULA 8 OZ', 'conversion' => '1 PCS', 'perpack' => 1],
            ['item' => '08-1073', 'description' => 'CUP 16 OZ', 'conversion' => '1 PCS', 'perpack' => 1],
            ['item' => '08-1074', 'description' => 'CUP 12 OZ', 'conversion' => '1 PCS', 'perpack' => 1],

            ['item' => '09-1017', 'description' => 'HAND SOAP', 'conversion' => '5 LTR/JRG', 'perpack' => 1],
            ['item' => '09-1022', 'description' => 'MULTI PURPOSE', 'conversion' => '1 SCT', 'perpack' => 1],
            ['item' => '09-1026', 'description' => 'SANITAIZER', 'conversion' => '1 SCT', 'perpack' => 1],

            ['item' => '13-6509', 'description' => 'FILLTER POWDER MAGNESOL', 'conversion' => '1 PCK', 'perpack' => 1],
            ['item' => '13-6517', 'description' => 'FILLTER AMPLOPE DALLAS', 'conversion' => '1 PCS', 'perpack' => 1],

            ['item' => '15-1001', 'description' => 'TISUE HANDS TOWELL', 'conversion' => '1 PCK', 'perpack' => 1],
            ['item' => '15-1102', 'description' => 'PLASTIK SAMPAH HITAM 90X120', 'conversion' => '1 KGS', 'perpack' => 1],

            ['item' => '30-2149', 'description' => 'TIN BUCKET', 'conversion' => '1 PCS', 'perpack' => 1],
            ['item' => '30-2151', 'description' => 'PREMIUM KFC MY UPIN IPIN 2023', 'conversion' => '1 PCS', 'perpack' => 1],
            ['item' => '30-2154', 'description' => 'MAJALAH BOBO', 'conversion' => '1 PCS', 'perpack' => 1],

            ['item' => '50--1001', 'description' => 'MINYAK BEKAS', 'conversion' => '1 TIN', 'perpack' => 1],
            ['item' => '50-2001', 'description' => 'KALENG KOSONG BEKAS', 'conversion' => '1 PCS', 'perpack' => 1],

            ['item' => '93-7005', 'description' => 'ISI TABUNG GAS 50 KG', 'conversion' => '1 TBG', 'perpack' => 1],
            ['item' => 'A2-0001', 'description' => 'AYAM SIDE ITEM', 'conversion' => '1 PCS', 'perpack' => 1],
            ['item' => 'A3-0011', 'description' => 'MIE MATANG', 'conversion' => '1 POR', 'perpack' => 1],
            ['item' => 'B1-0002', 'description' => 'AYAM MARINADE HCC', 'conversion' => 'HEAD', 'perpack' => 1],
            ['item' => 'B1-0017', 'description' => 'WING MARINADE PARTING 2 HCC', 'conversion' => '1 SET', 'perpack' => 1],
        ]);
    }
}
