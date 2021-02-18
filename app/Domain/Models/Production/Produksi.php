<?php

namespace App\Domain\Models\Production;

use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    protected $table = "produksi";

    protected $fillable = ['id_rencana', 'quantity', 'status'];

}
