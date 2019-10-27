
<h1>pagina de  editar ingresos</h1>

@extends('plantilla')

@extends('layouts.app')
@section('content')
@endsection

@section('contnav')


<div class="container">
    <h1 class="text-center">editar ingresos</h1>
    <hr>
    <form action="{{ route('ingresos.update', $ingreso->id) }}" method="POST">

        @csrf         <!-- toquen que utiliza laravel para proteccion de los datos a ingresar!-->
        @method('PUT')<!-- metodo que permite updatear!-->

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
                    <input type="text" name="monto" value="{{$ingreso->monto}}" class="form-control" placeholder="Monto del ingreso">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <strong>fecha:</strong>
                    <input type="text" name="fecha" value="{{$ingreso->fecha}}" class="form-control" placeholder="fecha del ingreso">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <strong>Descripcion:</strong>
                    <textarea class="form-control" name="descripcion" placeholder="Reseña">{{$ingreso->descripcion}}</textarea>
                </div>
            </div>

                      

             <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>


    </form>

</div>

@endsection