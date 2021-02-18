<?php

namespace App\Domain\Models\Sales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokoRetailer extends Model
{
    use HasFactory;
    protected $table='toko_retailer';
    protected $fillable = [
        'nama',
        'alamat',
        'no_telp'
    ];
}
