@extends('store.template')

@section('content')
<div class="container text-center mt-4 mb-4">
    <div class="row">
        @foreach($productos as $producto)
        <div class="col-sm-4">
            <div class="producto card mb-3" style="width: auto;">
                <img src="{{$producto->prod_imagen}}" widht='250px' alt="" class="card-img-top">
                <div class="producto-info card-body">
                    <h3 class="card-title">{{$producto->prod_nombre}}</h3><hr>
                    <p class="card-text">{{$producto->prod_extract}}</p>
                    <h3 class="card-text"><span class="badge badge-success">Precio: S/. {{number_format($producto->prod_precio,2)}}</span></h3>
                    <p>
                        <a class="btn btn-warning mt-1" href="{{route('carrito-agregar', $producto->prod_slug)}}"><i class="fas fa-cart-plus"></i> La quiero</a>
                        <a class="btn btn-primary mt-1" href="{{route('producto-detalle', $producto->prod_slug)}}"><i class="fas fa-chevron-circle-right"></i> Leer mas</a>
                    </p>
                </div>
            </div>
        </div>


        @endforeach
    </div>
</div>

@stop