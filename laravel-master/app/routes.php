<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$t = 1;
	$inventories = Inventory::all();
	return View::make('main/index')->with('inventories', $inventories)->with('t', $t);
});

Route::get('/', function()
{
	return View::make('index');
});

Route::resource('inventory', 'InventoryController');

Route::resource('collection', 'CollectionController');

Route::get('/login', function() {
	return View::make('login');
}); 

Route::controller('users', 'UsersController');	