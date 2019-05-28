<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class CartController extends Controller
{

    public function __construct() {
        if(!\Session::has('carrito')) \Session::put('carrito', array());
    }

    // Show cart
    public function show() {
        return \Session::get('carrito');
    }

    // Add item
    public function add(Productos $producto) {
        $cart = \Session::get('carrito');
        $producto->cantidad = 1;
        $cart[$producto->slug]=$producto;
        \Session::put('carrito', $cart);

        return redirect()->route('carrito-mostrar');
    }
    // Delete item
    // Update item
    // Trash cart
    // Total
}
