<?php

namespace App\Domain\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'inventory';

    protected $fillable = ['id_barang', 'id_gudang',  'quantity', 'tgl_masuk', 'tgl_kadaluarsa'];
}