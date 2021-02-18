<?php

namespace App\Http\Controllers\Production;

use Illuminate\Http\Request;
use App\Domain\Service\Production\RencanaService;
use App\Domain\Service\Inventory\BarangService; 

class RencanaController
{
    public function index()
    {
        $rencana = new RencanaService(); 
        $data['rencana'] = $rencana->getAll();
        return view('production.rencana.index', $data);
    }

    public function create()
    {
        $barang = new BarangService();
        $data['barang'] = $barang->getBarangJadi();

        return view('production.rencana.create', $data);
    }

    public function store(Request $request)
    {
        $rencana = new RencanaService();
        $result = $rencana->store($request);

        return redirect('rencana');
    }

    public function edit()
    {

    }

    public function update()
    {
        
    }

}

