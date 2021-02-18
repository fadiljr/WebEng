<?php

namespace App\Http\Controllers\Sales;


use Illuminate\Http\Request;
use App\Domain\Service\Sales\SalesOrderService;

class SalesOrderController 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sales = new SalesOrderService();
        $result=$sales->showSalesOrder();
        return view('sales.salesOrder.index',compact('result'));
    }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sales = new SalesOrderService();
        $toko=$sales->showToko();
        $barang=$sales->showBarang();
        return view('sales.salesOrder.create',compact('toko','barang'));
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
        $sales = new SalesOrderService();
        $result = $sales->createNewSalesOrder($request);
        return redirect('sales')->with('status','Data Sales Order berhasil ditambahkan');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\SalesOrder  $salesOrder
     * @return \Illuminate\Http\Response
     */
    public function show(SalesOrder $salesOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SalesOrder  $salesOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(SalesOrder $salesOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SalesOrder  $salesOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SalesOrder $salesOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SalesOrder  $salesOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalesOrder $salesOrder)
    {
        //
    }
}
