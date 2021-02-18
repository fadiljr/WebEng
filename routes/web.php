<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Login
Route::get('/', function () {
    return view('login');
});
Route::post('/login', 'User\LoginController@login');
Route::get('/logout', 'User\LoginController@logout');

Route::group(['middleware'=>'auth'], function(){
   Route::get('/welcome', function () {
		return view('master.welcome');
	});

	//Production
	Route::get('/produksi', 'Production\ProduksiController@index');
	Route::get('/produksi/create', 'Production\ProduksiController@create');
	Route::post('/produksi/store', 'Production\ProduksiController@store');
	Route::patch('/produksi/update/{id}', 'Production\ProduksiController@update');
	Route::get('/rencana', 'Production\RencanaController@index');
	Route::get('/rencana/create', 'Production\RencanaController@create');
	Route::post('/rencana/store', 'Production\RencanaController@store');
	Route::get('/formula', 'Production\FormulaController@index');
	Route::get('/formula/create', 'Production\FormulaController@create');
	Route::get('/permintaan', 'Production\PermintaanController@index');
	Route::get('/permintaan/create', 'Production\PermintaanController@create');

	//Purchasing
	Route::get('/purchaseOrder', 'Purchasing\PurchaseController@showAll');
	Route::get('/purchaseOrder/create', 'Purchasing\PurchaseController@create');
	Route::post('/purchaseOrder/create', 'Purchasing\PurchaseController@createNew');
	Route::get('/purchaseOrder/new', 'Purchasing\PurchaseController@create');
	Route::post('/purchaseOrder/new', 'Purchasing\PurchaseController@createNew');

	Route::get('/vendor/new', 'Purchasing\VendorController@newVendor');
	Route::post('/vendor/update/{id}', 'Purchasing\VendorController@update');
	Route::get('/vendor/list/{id}', 'Purchasing\VendorController@updateList');
	Route::get('/vendor/index', 'Purchasing\VendorController@showAll');
	Route::post('/vendor/create', 'Purchasing\VendorController@createNew');

	//Gudang
	Route::get('/barang', 'Inventory\BarangController@index');
	Route::get('/barang/create', 'Inventory\BarangController@create');
	Route::post('/barang/store', 'Inventory\BarangController@store');

	Route::get('/store/index', 'Inventory\StoreController@showAll');
	Route::get('/store/create/{id}', 'Inventory\StoreController@newInventory');
	Route::get('/store/create/new', 'Inventory\StoreController@createNew');
	Route::post('/store/create/new', 'Inventory\StoreController@createNew');

	//ExternalTransfer
	Route::get('/externaltransfer/index', 'Inventory\ExternalTransferController@showAll');

	//finance
	Route::get('/tagihan/index', 'Finance\TagihanController@showAll');
	Route::post('/tagihan/index', 'Finance\TagihanController@showAll');
	Route::get('/tagihan/update/{id}', 'Finance\TagihanController@update');
	Route::post('/tagihan/update/{id}', 'Finance\TagihanController@update');
	
	//SalesOrder
	Route::get('/sales', 'Sales\SalesOrderController@index');
	Route::get('/createSalesOrder', 'Sales\SalesOrderController@create');
	Route::post('/sales', 'Sales\SalesOrderController@store');

	//TokoRetailer
	Route::get('/createNewSupplier', 'Sales\TokoRetailerController@create');
	Route::post('/createNewSupplier', 'Sales\TokoRetailerController@store');
	Route::get('/supplier', 'Sales\TokoRetailerController@index');
	Route::get('/update/{toko}', 'Sales\TokoRetailerController@edit');
	Route::patch('/updateSupplier/{toko}', 'Sales\TokoRetailerController@update');
});




