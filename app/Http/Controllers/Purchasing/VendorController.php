<?php

namespace App\Http\Controllers\Purchasing;

use Illuminate\Http\Request;
use App\Domain\Service\Purchasing\VendorService;

class VendorController
{
    public function newVendor()
    {
        return view("purchasing.vendor.create");
    }

    public function createNew(Request $request)
    {
    	$newVendor = new VendorService();
        $result = $newVendor->createService($request);

        return redirect()->intended('/vendor/index');
    }

    public function showAll()
    {
    	$newVendor = new VendorService();
        $data['vendor'] = $newVendor->getData();
    
        return view("purchasing.vendor.index", $data);
    }

    public function update(Request $request, $id)
    {
    	$newVendor = new VendorService();
        $vendor = $newVendor->updateService($request, $id);

        return redirect()->intended('/vendor/index');
    }

    public function updateList($id)
    {
    	$newVendor = new VendorService();
        $data['vendor'] = $newVendor->getOneData($id);
    
        return view("purchasing.vendor.update", $data);
    }
}