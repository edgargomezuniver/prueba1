<h1> pagina de gastos</h1>

@extends('plantilla')

@section('contnav')

<h1 class="text-center">GASTOS</h1>

<div class="container">
	<a class="btn btn-info mb-2" href="">Agregar nuevo gasto</a>
		@if (Session::has('message'))
			<div class="alert alert-info"{{ Session::get('message') }}></div>
		@endif

	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">id</th>
	      <th scope="col">Nombre del gasto</th>
	      <th scope="col">descripcion del gasto</th>
	      <th scope="col">fecha del gasto</th>
	      <th scope="col">monto del gasto</th>
	      
	   
	  </tr>
	  </thead>
	 
	</table>

</div>


@endsection('contnav')

