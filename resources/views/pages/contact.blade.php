@extends('layout.default')
@section('content')

<section id="header">
	<div class="logo-container-contact">
		<div class="layer">
			<div class="logo-container-text">
				<p>
					lorem Ipsum
				</p>
				<h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
					ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
					parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
					pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
					pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
				</h3>
			</div>
		</div>
	</div>
</section>
<section id="form">
	<div class="general-text-2 central-c">
		<h3>lorem impsum titulum</h3>
		<p>
			Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos
			de texto.
			<br>
			Lorem Ipsum ha sido el texto de relleno estándar de las industrias
			 desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la
			imprenta)
		</p>
	</div>
	<div class="central-b">
		<div class="col-md-6 input-spaces">
			<input type="text" class="form-control" placeholder="Nombre" aria-describedby="basic-addon1">
			<input type="text" class="form-control" placeholder="Apellidos" aria-describedby="basic-addon2">
			<input type="text" class="form-control" placeholder="Teléfono de casa o celular" aria-describedby="basic-addon3">
			<input type="text" class="form-control" placeholder="Correo electrónico" aria-describedby="basic-addon4">
			<div class="input-group">
	      <input type="text" class="form-control" aria-label="...">
	      <div class="input-group-btn">
	        <button type="button" class="btn btn-default dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="caret"></span>
					</button>
	        <ul class="dropdown-menu dropdown-menu-right">
	          <li><a href="#">lorem</a></li>
	          <li><a href="#">Ipsum</a></li>
	          <li><a href="#">Dolor</a></li>
	          <li><a href="#">Sit</a></li>
	        </ul>
	      </div><!-- /btn-group -->
	    </div><!-- /input-group -->
			<input type="text" class="form-control" placeholder="Empresa" aria-describedby="basic-addon5">
			<input type="text" class="form-control" placeholder="Teléfono oficina" aria-describedby="basic-addon6">
			<input type="text" class="form-control input-lg" placeholder="Mensaje" aria-describedby="basic-addon7">

		 </div>
	 </div><!--col-md-6-->
	 <div class="col-md-6">
	 		
	 </div>
	</div>

</section>

@stop
