<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_stok_opname extends Model
{
    protected $table = 'detail_stok_opname';

    protected $fillable = [
        'stok_opname_id',
        'produk_id',
        'stok_fisik_pcs',
        'selisih_pcs',
    ];
}
