<?php

namespace App\Domain\Models\Production;

use Illuminate\Database\Eloquent\Model;

class RencanaProduksi extends Model
{
    protected $table = "rencana_produksi";

    protected $fillable = ['id_barang', 'quantity', 'tgl_produksi'];

}
