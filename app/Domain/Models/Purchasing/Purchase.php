<?php

namespace App\Domain\Models\Purchasing;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{   
    protected $table = "purchase_order";

    protected $fillable = ['id_barang', 'id_vendor', 'quantity', 'tgl_pembelian'];

}