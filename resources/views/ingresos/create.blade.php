
<h1>pagina de ingresos</h1>

@extends('plantilla')

@extends('layouts.app')
@section('content')
@endsection

@section('contnav')




<hr>
<div class="container">
    <h1>Agregar ingreso</h1>
    <form action="{{ route('ingresos.store') }}" method="POST"><!-- la ruta del formulario!-->
        @csrf <!-- toquen que utiliza laravel para proteccion de los datos a ingresar!-->

        

        <div class="row">

            <div class="form-group">
                <label for="exampleFormControlSelect1">categoria</label>
                    <select name="nombre" class="form-control" >
                          <option>Ingresos ordinarios o por trabajo</option>
                          <option>Ingresos extraordinarios o imprevistos</option>
                          <option>Ingresos pacivos o asegurados</option>
                          <option>Otros</option>
                    </select>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <strong>monto:</strong>
                    <input type="text" name="monto" class="form-control" placeholder="monto del ingreso">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <strong>fecha:</strong>
                    <input type="text" name="fecha" class="form-control" placeholder="fecha del ingreso">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <strong>Descripcion:</strong>
                    <textarea class="form-control" name="descripcion" placeholder="Reseña"></textarea>
                </div>
            </div>


            <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>

    </form>
</div>

@endsection