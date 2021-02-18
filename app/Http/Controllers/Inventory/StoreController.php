<?php

namespace App\Http\Controllers\Inventory;

use Illuminate\Http\Request;
use App\Domain\Service\Inventory\StoreService;

class StoreController
{
    public function newInventory($id)
    {
        $store = new StoreService();
        $data['purchase_order'] = $store->getOneData($id);
        $data['gudang'] = $store->getGudang();
        return view("inventory.storage.create", $data);
    }

    public function createNew(Request $request)
    {
    	$inventory = new StoreService();
        $result = $inventory->createService($request);

        return redirect()->intended('/store/index');
    }

    public function showAll()
    {
    	$tagihan = new StoreService();
        $data['tagihan'] = $tagihan->getData();
    
        return view("inventory.storage.index", $data);
    }

}