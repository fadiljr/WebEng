<?php

namespace App\DAO\Inventory;

use App\Domain\Models\Finance\Tagihan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ExternalTransferDAO
{
    public function show()
    {
        $result = Tagihan::where('status' ,1)->where('tipe', 1)->get();
        return $result;
    }
}
