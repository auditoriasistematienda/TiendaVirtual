<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Clientes;

class CartController extends Controller
{

    public function __construct() {
        if(!\Session::has('cart'))  \Session::put('cart', array());
    }

    // Show cart
    public function show() {
        $cart = \Session::get('cart');
        // dd($cart);
        $total = $this->total();
        return view('store.cart', compact('cart', 'total'));
    
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
    private function total() {
        $carrito = \Session::get('cart');
        $total = 0;
        foreach($carrito as $item) {
            $total += $item->prod_precio * $item->cantidad;
        }
        return $total;

    }

    // Datos de envio
    public function shippingInformation() {
        return view('store.datos-envio');
    }

    // Detalle del pedido
    public function orderDetail($cli_id) {
        if(count(\Session::get('cart')) <= 0) return redirect()->route('home');
        $cliente = Clientes::where('cli_id',$cli_id)->first();
        $carrito = \Session::get('cart');
        $total = $this->total();
        // dd($cliente);
        return view('store.detalle-orden', compact('carrito', 'total', 'cliente'));
    }
}
