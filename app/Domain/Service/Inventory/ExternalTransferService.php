<?php

namespace App\Domain\Service\Inventory;

use Illuminate\Http\Request;
use App\DAO\Inventory\ExternalTransferDAO;

class ExternalTransferService
{
    
    public function getData()
    {

    	$show = new ExternalTransferDAO();
    	$result = $show->show();

    	return $result;

    }

    
}
