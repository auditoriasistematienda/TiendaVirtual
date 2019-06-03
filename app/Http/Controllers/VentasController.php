<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ventas;
// use App\Productos;

class VentasController extends Controller
{
    public function realizarVenta($cli_id)
    {
        // return view('');
        
        $venta = Ventas::create([
            'ven_idcliente' => $cli_id,
            'ven_fecha' => new \DateTime(),
            'ven_envio' => 0,
            'ven_total' => $this->total(),
            'ven_idusuario' => 1,
        ]);

        // return view('detalle-orden');
        return redirect()->route('orden-finalizada', compact('venta'));
        // return view('detalle-orden' + '/' + $id->'cli_id');
        // dd($venta);
    }

    private function total() {
        $carrito = \Session::get('cart');
        $total = 0;
        foreach($carrito as $item) {
            $total += $item->prod_precio * $item->cantidad;
        }
        return $total;

    }
}
