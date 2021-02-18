<?php

namespace App\DAO\Finance;

use App\Domain\Models\Finance\Tagihan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TagihanDAO
{
    public function show()
    {
        $result = Tagihan::where('status' ,0)->get();
        return $result;
    }

    public function update($id)
    {
        $tagihan = Tagihan::where('id', $id)
            ->update([
            'status' => 1]);   
    }
}
