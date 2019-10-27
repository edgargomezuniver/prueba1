
<h1>pagina de  editar gastos</h1>

@extends('plantilla')

@extends('layouts.app')
@section('content')
@endsection

@section('contnav')


<div class="container">
    <h1 class="text-center">editar gastos</h1>
    <hr>
    <form action="{{ route('gastos.update', $gasto->id) }}" method="POST">

        @csrf         <!-- toquen que utiliza laravel para proteccion de los datos a ingresar!-->
        @method('PUT')<!-- metodo que permite updatear!-->

        <div class="row">
            <div class="form-group">
            <label for="exampleFormControlSelect1">categoria</label>
            <select name="nombre" class="form-control" >
              <option>Alimentacion</option>
              <option>Transporte</option>
              <option>Hogar</option>
              <option>Vestimenta</option>
              <option>Educacion</option>
              <option>Otros</option>
            </select>
          </div>

            <div class="col-md-12">
                <div class="form-group">
                    <strong>Descripcion:</strong>
                    <textarea class="form-control" name="descripcion" placeholder="Reseña">{{$gasto->descripcion}}</textarea>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <strong>fecha:</strong>
                    <input type="text" name="fecha" value="{{$gasto->fecha}}" class="form-control" placeholder="fecha del gasto">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <strong>monto:</strong>
                    <input type="text" name="monto" value="{{$gasto->monto}}" class="form-control" placeholder="Monto del gasto">
                </div>
            </div>

            
            <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>


    </form>

</div>

@endsection