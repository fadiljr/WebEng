<?php

namespace App\Http\Controllers\Sales;

use Illuminate\Http\Request;
use App\Domain\Service\Sales\TokoRetailerService;

class TokoRetailerController 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $toko = new TokoRetailerService();
        $result = $toko->getTokoRetailer();
        
        return view('sales.tokoRetailer.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sales.tokoRetailer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $toko= new TokoRetailerService();
        $result=$toko->createTokoRetailer($request);

        return redirect('createSalesOrder');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $getToko = new TokoRetailerService();
        $result = $getToko->getOneToko($id);

        return view('sales.tokoRetailer.update',compact('result'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $update = new TokoRetailerService();
        $result =$update->updateTokoRetailer($request,$id);
        
        return redirect('supplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
