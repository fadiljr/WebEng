<?php

namespace App\Domain\Service\Production;

use Illuminate\Http\Request;
use App\DAO\Production\RencanaDAO;

class RencanaService
{
    public function store(Request $request)
    {

    	$rencana = new RencanaDAO();
    	$result = $rencana->store($request);

    	return $result;

    }

    public function getAll()
    {

    	$rencana = new RencanaDAO();
    	$result = $rencana->getAll();

    	return $result;

    }

    public function getById($id)
    {

        $rencana = new RencanaDAO();
        $result = $rencana->getById($id);

        return $result;

    }

    public function update(Request $request, $id)
    {

        $update = new RencanaDAO();
        $result = $update->update($request, $id);

        return $result;

    }
}
