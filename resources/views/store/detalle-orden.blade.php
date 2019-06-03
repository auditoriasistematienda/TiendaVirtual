@extends('store.template')

@section('content')

    <div class="container text-center" style="flex: 1;">
        <div class="page-header mt-5">
            <h1><i class="fas fa-shopping-cart"></i> Detalle del pedido</h1>
        </div>

        <div class="producto-bloque">
            <div class="table-responsive">
                <h3>Datos del comprador</h3>
                <table class="table table-striped table-hover table-bordered">
                    <tr>
                        <td>Nombres</td>
                        <td>{{$cliente->cli_nombres}}</td>
                    </tr>
                    <tr>
                        <td>Apellidos</td>
                        <td>{{$cliente->cli_Apellidos}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{$cliente->cli_email}}</td>
                    </tr>
                    <tr>
                        <td>Telefono</td>
                        <td>{{$cliente->cli_telefono}}</td>
                    </tr>
                    <tr>
                        <td>Dirección</td>
                        <td>{{$cliente->cli_direccion}}</td>
                    </tr>
                </table>
            </div>
            <div class="table-responsive">
                <h3>Datos del pedido</h3>
                <table class="table table-striped table-hover table-bordered">
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                    </tr>
                    @foreach($carrito as $item)
                        <tr>
                            <td>{{$item->prod_nombre}}</td>
                            <td>S/. {{number_format($item->prod_precio, 2)}}</td>
                            <td>{{$item->cantidad}}</td>
                            <td>S/. {{number_format($item->prod_precio * $item->cantidad, 2)}}</td>
                        </tr>
                    @endforeach
                </table>
                <hr>
                <h3>
                    <span class="badge badge-succes">
                        Total: S/. {{number_format($total,2)}}
                    </span>
                </h3><hr>
                <p>
                    <a href="{{route('carrito-mostrar')}}" class="btn btn-primary"><i class="fas fa-chevron-circle-left"></i> Regresar</a>
                    <a href="#" class="btn btn-warning"><i class="fas fa-check-circle"></i> Confirmar compra</a>
                </p>
            </div>
        </div>
    </div>
    <br>

@stop