@extends('store.template')

@section('content')
    <div class="container text-center" style="flex: 1;">
        <div class="page-header mt-4">
            <h1><i class="fas fa-shopping-cart"></i>Carrito de compras</h1>
        </div>
        <div class="table-cart">
            @if(count($cart))

            <p>
                <a href="{{route('carrito-vaciar')}}" class="btn btn-danger">Vaciar el carrito <i class="far fa-trash-alt"></i></a>
            </p>

            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th>Quitar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $item)
                            <tr>
                                <td><img src="{{$item->prod_imagen}}"></td>
                                <td>{{$item->prod_nombre}}</td>
                                <td>S/. {{number_format($item->prod_precio,2)}}</td>
                                <!-- <td>{{$item->cantidad}}</td> -->
                                <td>
                                    <input 
                                        type="number" 
                                        min="1" 
                                        max="100" 
                                        value="{{$item->cantidad}}" 
                                        id="producto_{{$item->prod_id}}"
                                    >
                                    <a 
                                        href="#" 
                                        class="btn btn-warning btn-update-item" 
                                        data-slug="{{$item->prod_slug}}" 
                                        data-id="{{$item->prod_id}}"
                                    >
                                        <i class="fas fa-redo"></i>
                                    </a>
                                </td>
                                <td>S/. {{number_format($item->prod_precio * $item->cantidad,2)}}</td>
                                <td>
                                    <a href="{{route('carrito-eliminar', $item->prod_slug)}}" class="btn btn-danger">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table><hr>
                    <h3><span class="badge badge-success">Total: S/. {{number_format($total,2)}}</span></h3>
            </div>
            <hr>
            <p>
                <a href="{{route('home')}}" class="btn btn-primary"><i class="fas fa-chevron-circle-left"></i> Seguir comprando</a>
                <a href="{{route('datos-envio')}}" class="btn btn-primary"><i class="fas fa-chevron-circle-right"></i> Continuar</a>
            </p>
            @else
                <h3><span class="badge badge-warning">No hay productos en el carrito</span></h3>
                <hr>
                <p>
                    <a href="{{route('home')}}" class="btn btn-primary"><i class="fas fa-chevron-circle-left"></i> Ir a la tienda</a>
                </p>
            @endif
        </div>

    </div>
@stop
