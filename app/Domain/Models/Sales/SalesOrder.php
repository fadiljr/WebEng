<?php

namespace App\Domain\Models\Sales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model
{
    use HasFactory;

    protected $table = 'permintaan_barang';
    protected $fillable = [
        'id_barang',
        'id_toko_retailer',
        'quantity',
        'tgl_permintaan'
    ];
}
