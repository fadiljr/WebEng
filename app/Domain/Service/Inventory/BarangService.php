<?php

namespace App\Domain\Service\Inventory;

use Illuminate\Http\Request;
use App\DAO\Inventory\BarangDAO;

class BarangService
{
    public function store(Request $request)
    {

    	$barang = new BarangDAO();
    	$result = $barang->store($request);

    	return $result;

    }

    public function getAll()
    {

    	$barang = new BarangDAO();
    	$result = $barang->getAll();

    	return $result;

    }

    public function getBarangMentah()
    {

        $barang = new BarangDAO();
        $result = $barang->getBarangMentah();

        return $result;

    }

    public function getBarangJadi()
    {

        $barang = new BarangDAO();
        $result = $barang->getBarangJadi();

        return $result;

    }

    public function update(Request $request, $id)
    {

        $update = new BarangDAO();
        $result = $update->update($request, $id);

        return $result;

    }

    
}
