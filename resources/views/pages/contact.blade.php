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
	<div class="central-c ">
		<div class="col-md-5 input-spaces">
			<form role="form" data-toggle="validator">
				<input type="text" class="form-control" placeholder="Nombre" aria-describedby="basic-addon1" required>
				<input type="text" class="form-control" placeholder="Apellidos" aria-describedby="basic-addon2" required>
				<input type="number" class="form-control" placeholder="Teléfono de casa o celular" aria-describedby="basic-addon3" data-error="Recuerda poner sólo números"  required>
				 <div class="help-block with-errors"></div>
				<input type="email" class="form-control" placeholder="Correo electrónico" aria-describedby="basic-addon4" data-error="Esa dirección de correo es inválida" required>
 				<div class="help-block with-errors"></div>
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
				<input type="text" class="form-control" placeholder="Empresa" aria-describedby="basic-addon5" required>
				<input type="number" class="form-control" placeholder="Teléfono oficina" aria-describedby="basic-addon6" data-error="Recuerda poner sólo números" required>
				 <div class="help-block with-errors"></div>
				<input type="text" class="form-control input-lg" placeholder="Mensaje" aria-describedby="basic-addon7">
				<button type="quote" class="btn btn-primary center-block send-btn">Enviar</button>
			</form>
		</div>
	</div><!--col-md-5-->
	<div class="col-md-5 general-text-2 central-c">
		<h3>lorem impsum </h3>
		<p>
		 	Bosque de Ciruelos #130 int 1201 <br>
			Col. Bosque de las Lomas Cuajimalpa de Morelos. <br>
			México D.F. C.P. 11700 <br>
		</p>
		<div class="email-phone">
			<img src="images/telephone.png" alt="" />
			<p>
				2224 1607
			</p>
		</div>
		<div class="email-phone">
			<img src="images/mail.png" alt="" />
			<p>
				contacto@dinkbit.com
			</p>
		</div>
		<h3> dinkbit </h3>
		<div class="email-phone">
			<img src="images/telephone.png" alt="" />
			<p>
				2224 1607
			</p>
		</div>
		<div class="email-phone">
			<img src="images/mail.png" alt="" />
			<p>
				hacemoscosasincreibles@dinkbit.com
			</p>
		</div>
		<h3> síguenos en: </h3>
		<div class="footer-followus contact-logos">
			<ul>
				<li><a href="https://www.facebook.com/dinkbit/?fref=ts"><img src="images/facebookcontact.png" alt="" /></a></li>
				<li><a href="https://twitter.com/dinkbit"><img src="images/twittercontact.png" alt="" /></a></li>
				<li><a href="https://www.linkedin.com/company/dinkbit"><img src="images/incontact.png" alt="" /></a></li>
			</ul>
		</div>
	</div>
	</div>

</section>
<section id="map">
	<div class="container">
	<div id="map-canvas"></div>

	</div>
</section>

@stop
