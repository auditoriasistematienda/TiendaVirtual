@extends('store.template')

@section('content')

    <div class="container text-center" style="flex: 1;">
        <div class="page-header">
            <h1><i class="fas fa-handshake"></i> Muchas gracias por la compra</h1>
        </div>

        <div class="producto-bloque">
            <a href="{{route('home')}}" class="btn btn-primary"><i class="fas fa-chevron-circle-left"></i> Ir a la tienda</a>
        </div>
        <br>
    </div>

@stop