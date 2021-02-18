<?php

namespace App\DAO\Sales;

use App\Domain\Models\Sales\SalesOrder;
use App\Domain\Models\Sales\TokoRetailer;
use App\Domain\Models\Inventory\Barang;
use Illuminate\Support\Facades\DB;
use App\Domain\Models\Finance\Tagihan;
use Illuminate\Http\Request;

class SalesDAO
{
    public function getSalesOrder()
    {
        $sales = DB::table('permintaan_barang')
        ->join('barang', 'permintaan_barang.id_barang', '=', 'barang.id')
        ->join('toko_retailer', 'permintaan_barang.id_toko_retailer', '=', 'toko_retailer.id')
        ->select('permintaan_barang.*', 'barang.nama AS barang', 'toko_retailer.nama')
        ->get();
        
        return $sales;
    }
    public function getToko()
    {
        $toko=TokoRetailer::All();

        return $toko;
    }
    public function getBarang()
    {
        $barang=Barang::All();

        return $barang;
    }
    public function createSalesOrder(Request $request)
    {
        $sales=SalesOrder::create([
            'id_barang' => $request->produk,
            'id_toko_retailer' => $request->toko,
            'quantity' => $request->quantity,
            'tgl_permintaan' => $request->tgl
        ]);
        $id_barang=$request->produk;
        $barang = Barang::where('id', $id_barang)->first();
        $harga = $barang->harga;
        Tagihan::create([
            'tipe' => 1,
            'id_tipe' => $sales->id,
            'total' => $harga * $request->quantity,
            'tgl_tagihan' => $request->tgl,
            'status' => 0
        ]);
    }
    
}
