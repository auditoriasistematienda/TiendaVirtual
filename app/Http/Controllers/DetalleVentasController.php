<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetalleVentas;

class DetalleVentasController extends Controller
{
    public function realizarVenta($dv_idventa)
    {
        // return view('');
        $carrito = \Session::get('cart');
        foreach($carrito as $item) {
            $dventa = DetalleVentas::create([
                'dv_idventa' => $dv_idventa,
                'dv_idproducto' => $item->prod_id,
                'dv_cantidad' => $item->cantidad,
                'dv_total' => $item->prod_precio,
            ]);
        }

        // return view('detalle-orden');
        return redirect()->route('home');
        // return view('detalle-orden' + '/' + $id->'cli_id');
        // dd($carrito);
    }
}
