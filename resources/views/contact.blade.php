<h1> pagina de contactos</h1>

@extends('plantilla')

@extends('layouts.app')
@section('content')
@endsection

@section('contnav')



<h1 class="text-center">CONTACTOS</h1>



<div class="container">
	
  <form method="POST" action="{{ route('contact') }}">

  	@csrf

    	<div class="form-group">
        <label for="exampleFormControlInput1">nombre</label>
        
        <input name="nombre" class="form-control" placeholder="nombre">
      </div>
      
      
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>

        <input type="email" name="email" class="form-control" placeholder="name@example.com">
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">asunto</label>
        
        <input type="subject" name="subject" class="form-control" placeholder="asunto">
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">su mensaje</label>
        <textarea name="content" class="form-control" rows="3"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Enviar</button>

  </form>

</div>



@endsection('contnav')