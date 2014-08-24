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
	$cliente = Cliente::all();
	return View::make('hello')->with('clientes', $cliente);
});


Route::get('cliente/{id}', function($id)
{

	$cliente = Cliente::find($id);
	
	return "hola ".$cliente->nombres." documento :".$cliente->documento->descripcion;
});


