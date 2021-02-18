<?php

namespace App\Domain\Service\Purchasing;

use Illuminate\Http\Request;
use App\DAO\Purchasing\VendorDAO;

class VendorService
{
    public function createService(Request $request)
    {

    	$create = new VendorDAO();
    	$result = $create->create($request);

    	return $result;

    }

    public function updateService(Request $request, $id)
    {

    	$update = new VendorDAO();
    	$result = $update->update($request, $id);

    	return $result;

    }

    public function getData()
    {

    	$show = new VendorDAO();
    	$result = $show->show();

    	return $result;

    }

    public function getOneData($id)
    {

    	$get = new VendorDAO();
    	$result = $get->getVendor($id);

    	return $result;

    }
}
