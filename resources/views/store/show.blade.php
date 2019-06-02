@extends('store.template')


@section('content')
    <div class="container text-center mb-5" style="flex: 1;">
        <div class="page-header">
            <h1><i class="fas fa-shopping-cart"></i> Detalle del Producto</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="producto-bloque">
                    <img src="{{$producto->prod_imagen}}" alt="" width="300px">
                </div>
            </div>
            <div class="col-md-6">
                <div class="producto-bloque">
                    <h3>{{$producto->prod_nombre}}</h3><hr>
                    <div class="producto-info">
                        <p>{{$producto->prod_descripcion}}</p>
                        <h3><span class="badge badge-success">Precio: S/. {{number_format($producto->prod_precio,2)}}</span></h3>
                        <p>
                            <a class="btn btn-warning btn-block" href="{{route('carrito-agregar', $producto->prod_slug)}}"><i class="fas fa-cart-plus"></i> La quiero</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <p class="regresar-boton"><a class="btn btn-primary" href="{{route('home')}}"><i class="fas fa-chevron-circle-left"></i> Regresar</a></p>
    </div>
@stop