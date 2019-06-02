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
        $cart = \Session::get('cart');
        // dd($cart);
        return view('store.cart', compact('cart'));
    
        // return \Session::get('cart');
    }

    // Add item
    // public function add(Productos $producto) {
    //     $carrito = \Session::get('carrito');
    //     $producto->cantidad = 1;
    //     $carrito[$producto->prod_slug]=$producto;
    //     \Session::put('carrito', $carrito);
    //     return redirect()->route('carrito-mostrar');
    // }
    public function add($slug) {
        $carrito = \Session::get('cart');
        $producto = Productos::where('prod_slug',$slug)->first();
        $producto->cantidad = 1;
        $carrito[$slug] = $producto;
        \Session::put('cart', $carrito);
        return redirect()->route('carrito-mostrar');
    }

    // Delete item
    public function delete($slug) {
        $carrito = \Session::get('cart');
        unset($carrito[$slug]);
        \Session::put('cart', $carrito);
        return redirect()->route('carrito-mostrar');
    }

    // Update item
    public function update($slug, $cantidad) {
        $carrito = \Session::get('cart');
        $producto = Productos::where('prod_slug',$slug)->first();
        $carrito[$slug]->cantidad = $cantidad;
        \Session::put('cart', $carrito);
        return redirect()->route('carrito-mostrar');
    }

    // Trash cart
    public function trash() {
        \Session::forget('cart');
        return redirect()->route('carrito-mostrar');
    }

    // Total
}
