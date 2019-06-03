<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Productos;

class StoreController extends Controller
{
    public function index() {
        // $productos = Productos::all();
        $productos = DB::table('productos')->paginate(15);
        // dd($productos);
        return view('store.index', compact('productos'));
    }

    public function show($slug) {
        $producto = Productos::where('prod_slug',$slug)->first();
        // dd($producto);
        return view('store.show', compact('producto'));
    }
}
