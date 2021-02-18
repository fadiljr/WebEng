<?php

namespace App\Http\Controllers\Finance;

use Illuminate\Http\Request;
use App\Domain\Service\Finance\TagihanService;

class TagihanController
{
    public function showAll()
    {
    	$tagihan = new TagihanService();
        $data['tagihan'] = $tagihan->getData();
        return view("finance.tagihan.index", $data);
    }

    public function update($id)
    {
    	$tagihan = new TagihanService();
        $update = $tagihan->updateService($id);

        return redirect()->intended('/tagihan/index');
    }

    public function updateList($id)
    {
    	$newVendor = new VendorService();
        $data['vendor'] = $newVendor->getOneData($id);
    
        return view("finance.tagihan.update", $data);
    }
}