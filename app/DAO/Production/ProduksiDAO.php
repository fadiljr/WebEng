<?php

namespace App\DAO\Production;

use Illuminate\Http\Request;
use App\Domain\Models\Production\Produksi;
use App\Domain\Models\Production\RencanaProduksi;
use DB;

class ProduksiDAO
{

    public function store(Request $request)
    {
    	
    	$id_rencana = $request->input('id_rencana');
        
        Produksi::create([
            'id_rencana' => $id_rencana, 
            'status' => 0, 
        ]);

        $rencana = Rencana::find($id_rencana);
        $rencana->delete();

    }

    public function getAll()
    {

        $result = DB::table('produksi')->select('produksi.id as p_id', 'rencana_produksi.id as id_rencana', 'id_barang', 'quantity',                                           'tgl_produksi', 'nama', 'status')
                                       ->join('rencana_produksi', 'rencana_produksi.id', '=', 'id_rencana')
                                       ->join('barang', 'barang.id', '=', 'id_barang')
                                       ->get();

        return $result;

    }

    public function update($id)
    {
        
        Produksi::where('id', $id)
            ->update([
            'status' => 1, 
        ]);
    }

}
