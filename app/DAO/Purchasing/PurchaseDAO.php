<?php

namespace App\DAO\Purchasing;

use App\Domain\Models\Purchasing\Purchase;
use App\Domain\Models\Purchasing\Vendor;
use App\Domain\Models\Inventory\Barang;
use App\Domain\Models\Finance\Tagihan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PurchaseDAO
{
    public function show()
    {
    	
        $result = Purchase::all();
        return $result;

    }

    public function getBarang()
    {
        $barang=Barang::where('tipe', 1)->get();
        return $barang;
    }

    public function getVendor()
    {	
        $result = Vendor::all();
        return $result;
    }

    public function create(Request $request)
    {
    	
    	$id_barang = $request->input('id_barang');
        $id_vendor = $request->input('id_vendor');
        $quantity = $request->input('quantity');
        $barang = Barang::where('id', $id_barang)->first();
        $harga = $barang->harga;
        $tgl_pembelian = $request->input('tgl_pembelian');
        
        $purchase = Purchase::create([
            'id_barang' => $id_barang, 
            'id_vendor' => $id_vendor,
            'quantity' => $quantity, 
            'tgl_pembelian'=> $tgl_pembelian]);

        Tagihan::create([
            'tipe' => 2,
            'id_tipe' => $purchase->id,
            'total' => $harga * $quantity,
            'tgl_tagihan' => $tgl_pembelian,
            'status' => 0
        ]);

    }

}
