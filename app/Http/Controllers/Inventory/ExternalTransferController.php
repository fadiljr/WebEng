<?php

namespace App\Http\Controllers\Inventory;

use Illuminate\Http\Request;
use App\Domain\Service\Inventory\ExternalTransferService;

class ExternalTransferController
{
    

    public function showAll()
    {
    	$tagihan = new ExternalTransferService();
        $data = $tagihan->getData();
    
        return view("inventory.external_transfer.index", compact('data'));
    }

}