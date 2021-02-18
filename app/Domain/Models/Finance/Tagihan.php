<?php

namespace App\Domain\Models\Finance;

use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    protected $table = 'tagihan';

    protected $fillable = ['tipe', 'id_tipe', 'total', 'tgl_tagihan', 'status'];
}
