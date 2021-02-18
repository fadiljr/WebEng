<?php

namespace App\DAO\Sales;

use App\Domain\Models\Sales\TokoRetailer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TokoRetailerDAO
{
    public function createTokoRetailer(Request $request)
    {
        TokoRetailer::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->tlp
        ]);
    }
    public function getTokoRetailer()
    {
        $result = TokoRetailer::All();
        
        return $result;
    }
    public function getOneToko($id)
    {
        $result = DB::table('toko_retailer')->select('toko_retailer.*')->where('id','=',$id)->get();
        return $result;
    }
    public function updateTokoRetailer(Request $request,$id)
    {
        
        TokoRetailer::where('id', $id)
                    ->update([
                        'nama' => $request->nama,
                        'alamat' => $request->alamat,
                        'no_telp' => $request->tlp
                        ]);
    }
}