@extends('store.template')

@section('content')

    <div class="container text-center" style="flex: 1;">
        <div class="page-header">
            <h1><i class="fas fa-shopping-cart"></i> Datos del envio</h1>
        </div>

        <form class="producto-bloque" action="{{url('datos-envio')}}" method="POST" role="form">
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-2 offset-2 col-md-8">
                    <div class="form-group">
                        <label for="dni" class="col-form-label">DNI:</label>
                        <input type="text" class="form-control" name="cli_dni" required maxlength="8" minlength="8">
                    </div>
                    <div class="form-group">
                        <label for="nombres" class="col-form-label">Nombres:</label>
                        <input type="text" class="form-control" name="cli_nombres" required>
                    </div>
                    <div class="form-group">
                        <label for="apellidos" class="col-form-label">Apellidos:</label>
                        <input type="text" class="form-control" name="cli_apellidos" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" name="cli_email">
                    </div>
                    <div class="form-group">
                        <label for="direccion" class="col-form-label">Direccion:</label>
                        <input type="text" class="form-control" name="cli_direccion" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono" class="col-form-label">Telefono:</label>
                        <input type="text" class="form-control" name="cli_telefono" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Confirmar</button>
                    </div>
                </div>
            </div>
        </form>
        <br>
    </div>

@stop