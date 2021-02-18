<?php

namespace App\DAO\Purchasing;

use Illuminate\Http\Request;
use App\Domain\Models\Purchasing\Vendor;
use Illuminate\Support\Facades\DB;

class VendorDAO
{
    public function show()
    {
    	
        $result = Vendor::all();
        return $result;

    }

    public function getVendor($id)
    {
       
        $result = Vendor::where('id',$id)->first();
        
    	return $result;

    }

    public function create(Request $request)
    {
    	
    	$nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $no_telp = $request->input('no_telp');
        
        Vendor::create([
            'nama' => $nama, 
            'no_telp' => $no_telp, 
            'alamat'=> $alamat]);
    }

    public function update(Request $request, $id)
    {
    	
    	$nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $no_telp = $request->input('no_telp');
        
        Vendor::where('id', $id)
            ->update([
            'nama' => $nama, 
            'no_telp' => $no_telp, 
            'alamat'=> $alamat]);
    }
}