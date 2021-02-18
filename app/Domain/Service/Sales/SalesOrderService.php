<?php

namespace App\Domain\Service\Sales;

use Illuminate\Http\Request;
use App\DAO\Sales\SalesDAO;

class SalesOrderService
{
    public function showSalesOrder()
    {
        $sales = new SalesDAO();
    	$result = $sales->getSalesOrder();

    	return $result;
    }
    public function showToko()
    {
        $sales = new SalesDAO();
    	$result = $sales->getToko();

    	return $result;
    }
    public function showBarang()
    {
        $sales = new SalesDAO();
    	$result = $sales->getbarang();

    	return $result;
    }

    public function createNewSalesOrder(Request $request)
    {
        $sales = new SalesDAO();
    	$result = $sales->createSalesOrder($request);

    	return $result;
    }
    
}