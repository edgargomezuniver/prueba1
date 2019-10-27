<h1> pagina de gastos</h1>

@extends('plantilla')

@extends('layouts.app')
@section('content')
@endsection

@section('contnav')

  <h1 class="text-center">lista de gastos</h1>

<div class="container">

  <a class="btn btn-info mb-2" href="{{ route('gastos.create') }}">Agregar gasto</a>
 

<table class="table">
  <thead class="thead-dark">

    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">descripcion</th>
      <th scope="col">fecha</th>
      <th scope="col">monto</th>
            
      <th scope="col">acciones</th>

    </tr>
  </thead>
  <tbody>

     @foreach($gastos as $gasto)
    <tr>
      <th scope="row">{{ $gasto->id}}</th>
      <td>{{ $gasto->nombre }}</td>
      <td>{{ $gasto->descripcion }}</td>
      <td>{{ $gasto->fecha }}</td>
      <td>{{ $gasto->monto }}</td>

      <td><a class="btn btn-info mb-2" href="{{ route('gastos.edit',$gasto->id) }}">editar</a>

      <form action="{{ route('gastos.destroy',$gasto->id) }}" method="POST">
            @csrf
            @method('DELETE')

          <button type="submit" class="btn-sm btn-danger" onclick="return confirm ('esta seguro de borrar?')">borrar</button>
      </form>

      </td>

    
    @endforeach
    

  </tbody>

</table>

{{ $gastos->links() }}

</div>


@endsection('contnav')