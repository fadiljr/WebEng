<?php

namespace App\Domain\Service\Purchasing;

use Illuminate\Http\Request;
use App\DAO\Purchasing\PurchaseDAO;

class PurchaseService
{
    public function createService(Request $request)
    {

    	$create = new PurchaseDAO();
    	$result = $create->create($request);

    	return $result;

    }

    public function getData()
    {

    	$show = new PurchaseDAO();
    	$result = $show->show();

    	return $result;

    }

    public function showVendor()
    {
        $show = new PurchaseDAO();
    	$result = $show->getVendor();

    	return $result;
    }
    public function showBarang()
    {
        $show = new PurchaseDAO();
    	$result = $show->getbarang();

    	return $result;
    }


}
