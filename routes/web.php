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

    Route::bind('producto', function($slug){
        return App\Productos::where('prod_slug', $slug)->first();
    });

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

    Route::get('carrito/agregar/{producto}', [
        'as'=>'carrito-agregar',
        'uses'=>'CartController@add'
    ]);

 
