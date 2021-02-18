<?php

namespace App\Domain\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    protected $table = 'gudang';

    protected $fillable = ['nama', 'alamat'];
}