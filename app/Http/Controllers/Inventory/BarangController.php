<?php

namespace App\Http\Controllers\Inventory;

use Illuminate\Http\Request;
use App\Domain\Service\Inventory\BarangService;

class BarangController
{
    public function index()
    {

        $barang = new BarangService();
        $data['barang'] = $barang->getAll();

        return view('inventory.barang.index', $data);
    }

    public function create()
    {
        return view('inventory.barang.create');
    }

    public function store(Request $request)
    { 

        $barang = new BarangService();
        $result = $barang->store($request);

        return redirect('barang');
    }

    public function edit(){

    }

    public function update(){
        
    }


}

