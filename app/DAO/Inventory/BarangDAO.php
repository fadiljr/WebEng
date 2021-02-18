<?php

namespace App\DAO\Inventory;

use Illuminate\Http\Request;
use App\Domain\Models\Inventory\Barang;
use Illuminate\Support\Facades\DB;

class BarangDAO
{

    public function store(Request $request)
    {
    	
    	$nama = $request->input('nama');
        $harga = $request->input('harga');
        $keterangan = $request->input('keterangan');
        $tipe = $request->input('tipe');
        
        $query = Barang::create([
            'nama' => $nama, 
            'harga' => $harga, 
            'keterangan'=> $keterangan,
            'tipe'=> $tipe,
        ]);

    }

    public function getAll()
    {
    	
        $result = Barang::all();
        return $result;

    }

    public function getBarangMentah()
    {
        
        $result = Barang::where('tipe', 1)->get();
        return $result;

    }

    public function getBarangJadi()
    {
        
        $result = Barang::where('tipe', 2)->get();
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
