<h1> pagina de ingresos</h1>

@extends('plantilla')

@extends('layouts.app')
@section('content')
@endsection

@section('contnav')

  <h1 class="text-center">lista de ingresos</h1>

<div class="container">

  <a class="btn btn-info mb-2" href="{{ route('ingresos.create') }}">Agregar ingreso</a>
 

<table class="table">
  <thead class="thead-dark">

    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">monto</th>
      <th scope="col">fecha</th>
      <th scope="col">descripcion</th>

      <th scope="col">acciones</th>

    </tr>
  </thead>
  <tbody>

     @foreach($ingresos as $ingreso)
    <tr>
      <th scope="row">{{ $ingreso->id}}</th>
      <td>{{ $ingreso->nombre }}</td>
      <td>{{ $ingreso->monto }}</td>
      <td>{{ $ingreso->fecha }}</td>
      <td>{{ $ingreso->descripcion }}</td>
      
      <td><a class="btn btn-info mb-2" href="{{ route('ingresos.edit',$ingreso->id) }}">editar</a>

      <form action="{{ route('ingresos.destroy',$ingreso->id) }}" method="POST">
            @csrf
            @method('DELETE')

          <button type="submit" class="btn-sm btn-danger" onclick="return confirm ('esta seguro de borrar?')">borrar</button>
      </form>


    </tr>
    @endforeach
    

  </tbody>

</table>

{{ $ingresos->links() }}

</div>


@endsection('contnav')