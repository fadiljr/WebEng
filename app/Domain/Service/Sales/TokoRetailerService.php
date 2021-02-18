<?php

namespace App\Domain\Service\Sales;

use Illuminate\Http\Request;
use App\DAO\Sales\TokoRetailerDAO;

class TokoRetailerService
{
    public function createTokoRetailer(Request $request)
    {
        $toko= new TokoRetailerDAO();
        $result = $toko->createTokoRetailer($request);

        return $result;
    }
    public function getTokoRetailer()
    {
        $getToko = new TokoRetailerDAO();
        $result = $getToko->getTokoRetailer();
        return $result;
    }
    public function getOneToko($id)
    {
        $getToko = new TokoRetailerDAO();
        $result = $getToko->getOneToko($id);
        return $result;
    }
    public function updateTokoRetailer(Request $request,$id)
    {
        $update = new TokoRetailerDAO();
        $result = $update->updateTokoRetailer($request,$id);
        return $result;
    }
    
}