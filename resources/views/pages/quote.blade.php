@extends('layout.default')
@section('content')

<section id="header">
	<div class="logo-container-quote">
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
<section>
  <div class="container">
    <div class="col-md-4 general-text-2 central-c">
      <h3>lorem impsum </h3>
      <p>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <br>
        Aenean commodo ligula eget dolor. Aenean massa.
      </p>
      <h4>lorem ipsum</h4>
      <p>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
          ligula eget dolor. Aenean massa.
      </p>
      <h4>lorem ipsum</h4>
      <p>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
        ligula eget dolor. Aenean massa.
        <br>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
        ligula eget dolor. Aenean massa.
      </p>
      <h4>lorem impsum </h4>
      <p>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <br>
        Aenean commodo ligula eget dolor. Aenean massa.
      </p>
    </div>
    <div class="col-md-5 central-d">
      <div class="container-box general-text-2">
        <p>
          Arrastre los botones de abajo para el monto que desea pedir prestado y en
          cuantas quincenas
        </p>
        <hr>
        <div class="slider">

          <h4>Monto</h4>
          <div class="footer-followus">
            <input type="range" id="myRange1" value="10000" min="5000" max="100000" step="5000" onchange="myFunction();">
            <ul>
              <li class="left">$5,000</li>
              <li class="right">$100,000</li>
            </ul>
          </div>
        </div>
        <div class="slider">

          <h4>quincenas</h4>
          <div class="footer-followus">
            <input type="range" id="myRange2" value="12" min="8" max="48" step="2" onchange="myFunction2();">
            <ul>
              <li class="left">8</li>
              <li class="right">48</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container-box-gray general-text-3 ">
        <div class=" container">
          <div class="col-sm-4">
            <h4>monto</h4>
            <h5 id="number1"></h5>
          </div>
          <div class="col-sm-4">
            <h4>quincenas</h4>
            <h5 id="number2"></h5>
          </div>
          <div class="col-sm-4">
            <h4>pagos</h4>
          </div>
          <button type="quote" class="btn btn-success center-block">obtenga su dinero ahora</button>
          <h4>ver tabla de amortización</h4>
          <table>
            <tr>
              <th>No. de pago</th>
              <th>Saldo insoluto</th>
              <th>Amortización</th>
              <th>Interés</th>
              <th>IVA</th>
              <th>Pago</th>
            </tr>
          </table>
        </div>

      </div>
    </div>
  </div>
</section>



@stop
