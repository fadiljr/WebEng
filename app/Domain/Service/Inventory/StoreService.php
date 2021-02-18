<?php

namespace App\Domain\Service\Inventory;

use Illuminate\Http\Request;
use App\DAO\Inventory\StoreDAO;

class StoreService
{
    public function createService(Request $request)
    {

    	$create = new StoreDAO();
    	$result = $create->create($request);

    	return $result;

    }

    public function getData()
    {

    	$show = new StoreDAO();
    	$result = $show->show();

    	return $result;

    }

    public function getOneData($id)
    {

    	$get = new StoreDAO();
    	$result = $get->getPurchase($id);

    	return $result;

    }

    public function getGudang()
    {

    	$show = new StoreDAO();
    	$result = $show->showGudang();

    	return $result;

    }
}
