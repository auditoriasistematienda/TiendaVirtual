<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;


class ClienteController extends Controller
{
    public function create(Request $data)
    {
        // return view('');
        $id = Clientes::create([
            'cli_dni' => $data['cli_dni'],
            'cli_nombres' => $data['cli_nombres'],
            'cli_apellidos' => $data['cli_apellidos'],
            'cli_email' => $data['cli_email'],
            'cli_direccion' => $data['cli_direccion'],
            'cli_telefono' => $data['cli_telefono']
        ]);

        // return view('detalle-orden');
        return redirect()->route('detalle-orden', compact('id'));
        // return view('detalle-orden' + '/' + $id->'cli_id');
        // dd($id->cli_id);
    }

    // public function store(Request $request) {
    //     $this->validate($request,[
    //         'cli_dni' => 'required|unique:clientes,cli_dni|numeric|digits:8',
    //         'cli_apellidos' => 'required|max:50|min:3',
    //         'cli_nombres' => 'required|max:50|min:3',
    //         'cli_email' => 'required|max:50|min:3',
    //         'cli_direccion' => 'nullable|min:7|max:13',
    //         'cli_telefono' => 'nullable|min:8|max:15'
        
            
    //       ]);
    //       $data = $request->all();
    //       $cliente = Clientes::create($data);
    //       return redirect()->route('store.detalle-orden')->with('status', 'Cliente agregado correctamente!');
    // }

}
