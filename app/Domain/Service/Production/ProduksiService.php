<?php

namespace App\Domain\Service\Production;

use Illuminate\Http\Request;
use App\DAO\Production\ProduksiDAO;

class ProduksiService
{
    public function store(Request $request)
    {

    	$produksi = new ProduksiDAO();
    	$result = $produksi->store($request);

    	return $result;

    }

    public function getAll()
    {

    	$rencana = new ProduksiDAO();
    	$result = $rencana->getAll();

    	return $result;

    }

    public function update($id)
    {

        $update = new ProduksiDAO();
        $result = $update->update($id);

        return $result;

    }
}
