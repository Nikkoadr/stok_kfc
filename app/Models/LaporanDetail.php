<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanDetail extends Model
{
    protected $table = 'laporan_detail';

    protected $fillable = [
        'laporan_id',
        'barang_id',
        'query_stok_card',
        'fisik_barang',
        'selisih',
    ];
}
