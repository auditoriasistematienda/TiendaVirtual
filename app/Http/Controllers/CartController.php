<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class CartController extends Controller
{

    public function __construct() {
        if(!\Session::has('cart'))  \Session::put('cart', array());
    }

    // Show cart
    public function show() {
        return \Session::get('cart');
    
    }

    // Add item
    public function add(Productos $producto) {
        $carrito = \Session::get('cart');
        $producto->cantidad = 1;
        $carrito[$producto->prod_slug]=$producto;
        \Session::put('cart', $carrito);
        return redirect()->route('carrito-mostrar');
    }
    // public function add($slug) {
    //     $carrito = \Session::get('carrito');
    //     $producto = Productos::where('prod_slug',$slug)->first();
    //     $producto->cantidad = 1;
    //     $carrito[$slug] = $producto;
    //     \Session::put('carrito', $carrito);
    //     return redirect()->route('carrito-mostrar');
    // }
    
    // Delete item
    // Update item
    // Trash cart
    // Total
}
