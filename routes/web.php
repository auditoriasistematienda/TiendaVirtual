<?php

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
    Route::get('/', [
        'as'=>'home',
        'uses'=>'StoreController@index'
    ]);

    Route::get('producto/{slug}',[
        'as'=>'producto-detalle',
        'uses'=>'StoreController@show'
    ]);

    // Carrito
    Route::get('carrito/mostrar', [
        'as'=>'carrito-mostrar',
        'uses'=>'CartController@show'
    ]);

    Route::get('carrito/agregar/{slug}', [
        'as'=>'carrito-agregar',
        'uses'=>'CartController@add'
    ]);

    Route::get('carrito/eliminar/{slug}', [
        'as'=> 'carrito-eliminar',
        'uses'=>'CartController@delete'
    ]);

    Route::get('carrito/vaciar', [
        'as'=> 'carrito-vaciar',
        'uses'=>'CartController@trash'
    ]);
 
    Route::get('carrito/actualizar/{slug}/{cantidad}', [
        'as'=> 'carrito-actualizar',
        'uses'=>'CartController@update'
    ]);

    Route::post('datos-envio','ClienteController@create');

    Route::get('datos-envio', [
        'as'=> 'datos-envio',
        'uses'=>'CartController@shippingInformation'
    ]);

    Route::get('detalle-orden/{cli_id}', [
        'as'=> 'detalle-orden',
        'uses'=>'CartController@orderDetail'
    ]);

    Route::get('compra/orden-realizada/{cli_id}', [
        'as'=> 'orden-realizada',
        'uses'=>'VentasController@realizarVenta'
    ]);

    Route::get('compra/orden-finalizada/{dv_idventa}', [
        'as'=> 'orden-finalizada',
        'uses'=>'DetalleVentasController@realizarVenta'
    ]);
    