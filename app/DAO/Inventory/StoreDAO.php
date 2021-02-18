<?php

namespace App\DAO\Inventory;

use App\Domain\Models\Finance\Tagihan;
use App\Domain\Models\Purchasing\Purchase;
use App\Domain\Models\Inventory\Store;
use App\Domain\Models\Inventory\Gudang;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StoreDAO
{
    public function show()
    {
        $result = Tagihan::where('status' ,1)->where('tipe', 2)->get();
        return $result;
    }

    public function showGudang()
    {
        $result = Gudang::all();
        return $result;
    }

    public function create(Request $request)
    {

        $id_barang = $request->input('id_barang');
        $id_gudang = $request->input('id_gudang');
        $quantity = $request->input('quantity');
        $tgl_masuk = $request->input('tgl_masuk');
        $tgl_kadaluarsa = $request->input('tgl_kadaluarsa');
        
        Store::create([
            'id_barang' => $id_barang, 
            'id_gudang' => $id_gudang, 
            'quantity' => $quantity, 
            'tgl_masuk'=> $tgl_masuk,
            'tgl_kadaluarsa'=> $tgl_kadaluarsa]);  
    }

    public function getPurchase($id)
    {
       
        $tagihan = Tagihan::where('id',$id)->first();
        $result = Purchase::where('id', $tagihan->id_tipe)->first();
        
        Tagihan::where('id', $id)
            ->update([
            'status' => 2]);   
            
        return $result;
    }
}
