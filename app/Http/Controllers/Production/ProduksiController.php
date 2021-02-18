<?php

namespace App\Http\Controllers\Production;

use Illuminate\Http\Request;
use App\Domain\Service\Production\ProduksiService;
use App\Domain\Service\Production\RencanaService;

class ProduksiController
{
    public function index()
    {
        $produksi = new ProduksiService(); 
        $data['produksi'] = $produksi->getAll();

        return view('production.produksi.index', $data);
    }

    public function create()
    {
        $rencana = new RencanaService();
        $data['rencana'] = $rencana->getAll();

        return view('production.produksi.create', $data);
    }

    public function store(Request $request)
    {
        $produksi = new ProduksiService();
        $result = $produksi->store($request);

        return redirect('produksi');
    }

    public function update($id)
    {
        $produksi = new ProduksiService();
        $result = $produksi->update($id);

        return redirect('produksi');
    }

}

