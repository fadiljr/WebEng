<?php

namespace App\Domain\Models\Purchasing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vendor extends Model
{

    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "vendor";
    protected $fillable = ['nama', 'alamat', 'no_telp'];

}