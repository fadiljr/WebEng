<?php

namespace App\Http\Controllers\Purchasing;

use Illuminate\Http\Request;
use App\Domain\Service\Purchasing\PurchaseService;

class PurchaseController
{
    public function showAll()
    {
    	$purchase = new PurchaseService();
        $data['purchase_order'] = $purchase->getData();
        return view("purchasing.purchase.index", $data);
    }

    public function create()
    {
        //
        $purchase = new PurchaseService();
        $vendor=$purchase->showVendor();
        $barang=$purchase->showBarang();
        return view('purchasing.purchase.create',compact('vendor','barang'));
    }

    public function createNew(Request $request)
    {
    	$purchase = new PurchaseService();
        $result = $purchase->createService($request);

        return redirect()->intended('/purchaseOrder');
    }

}