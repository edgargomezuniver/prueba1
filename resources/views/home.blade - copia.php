<h1>CONTROL DE GASTOS E INGRESOS</h1>
<h1 class="text-center"></h1>
@extends('plantilla')

@section('contnav')

<div class="container">
	
	
		​<img src="{{asset('imagen/1.jpg')}}" class="rounded mx-auto d-block" alt="{{asset('imagen/3.jpg')}}">
  
    </div>

<p></p>
<section>



	<div class="container">
                <h2 class="title">Administra tu dinero facilmente!</h2>
                <hr>
					<div class="card-deck">

					  <div class="card">
					    <img src="{{asset('imagen/gasto.jpeg')}}" class="card-img-top" alt="...">
					    <div class="card-body">
					      <h5 class="card-title">Gastos</h5>
					      <p class="card-text">Registra cada gasto que tengas para saver en que es lo que mas gastas</p>
					    </div>
					    <div class="card-footer">
					     <a href="/gastos" class="btn btn-primary">Mas....</a>
					    </div>
					  </div>

					  <div class="card">
					    <img src="{{asset('imagen/ingreso.jpg')}}" class="card-img-top" alt="...">
					    <div class="card-body">
					      <h5 class="card-title">ingresos</h5>
					      <p class="card-text">registra tus ingresos de manera facil y enterate cuanto es lo que estas ganando.</p>
					    </div>
					    <div class="card-footer">
					      <a href="/ingresos" class="btn btn-primary">Mas....</a>
					    </div>
					  </div>

					  <div class="card">
					    <img src="{{asset('imagen/contacto.png')}}" class="card-img-top" alt="...">
					    <div class="card-body">
					      <h5 class="card-title">contactos</h5>
					      <p class="card-text">Envianos tus dudas y sugerencias.</p>
					    </div>
					    <div class="card-footer">
					      <a href="/contacto" class="btn btn-primary">Mas....</a>
					    </div>
					  </div>
					
                </div><!--//cards-->
                
            </div><!--//container-->
        </section><!--//cards-section-->
    

</div>

<hr>

<div class="card-footer">
	<p class="text-center">Yacuiba - Bolivia</p>
</div>

@endsection('contnav')

