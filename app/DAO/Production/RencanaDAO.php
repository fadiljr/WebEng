<?php

namespace App\DAO\Production;

use Illuminate\Http\Request;
use App\Domain\Models\Production\RencanaProduksi;
use DB;

class RencanaDAO
{

    public function store(Request $request)
    {
    	
    	$id_barang = $request->input('id_barang');
        $quantity = $request->input('quantity');
        $tgl_produksi = $request->input('tgl_produksi');
        
        RencanaProduksi::create([
            'id_barang' => $id_barang, 
            'quantity' => $quantity, 
            'tgl_produksi'=> $tgl_produksi,
        ]);

    }

    public function getAll()
    {
    	
        $result = DB::table('rencana_produksi')->select('rencana_produksi.id', 'id_barang','quantity', 'tgl_produksi', 'nama')
                                               ->join('barang', 'barang.id', '=', 'id_barang')
                                               ->get();

        return $result;

    }

    public function getById($id)
    {
        
        $result = RencanaProduksi::where('id', $id)->first();

        return $result;

    }

    public function update(Request $request, $id)
    {
    	
    	$nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $no_telp = $request->input('no_telp');
        
        Barang::where('id', $id)
            ->update([
            'nama' => $nama, 
            'no_telp' => $no_telp, 
            'alamat'=> $alamat]);
    }

}
