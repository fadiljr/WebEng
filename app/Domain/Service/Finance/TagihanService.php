<?php

namespace App\Domain\Service\Finance;

use Illuminate\Http\Request;
use App\DAO\Finance\TagihanDAO;

class TagihanService
{
    public function getData()
    {

    	$show = new TagihanDAO();
    	$result = $show->show();

    	return $result;

    }

    public function updateService($id)
    {

    	$update = new TagihanDAO();
    	$result = $update->update($id);

    	return $result;

    }

}
