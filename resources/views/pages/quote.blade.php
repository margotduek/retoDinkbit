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
            <h5>$1.849.82</h5>
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
            <tr>
              <td>1</td>
              <td>$15,000.00</td>
              <td>$1,249.09</td>
              <td>$517.88</td>
              <td>$82.86</td>
              <td>$1849.82</td>
            </tr>
            <tr>
              <td>2</td>
              <td>$13,750.82</td>
              <td>$1,299.11</td>
              <td>$474.75</td>
              <td>$75.96</td>
              <td>$1849.82</td>
            </tr>
            <tr>
              <td>3</td>
              <td>$12,451.81</td>
              <td>$1,351.14</td>
              <td>$429.90</td>
              <td>$68.78</td>
              <td>$1849.82</td>
            </tr>
            <tr>
              <td>4</td>
              <td>$11,100.67</td>
              <td>$1,405.25</td>
              <td>$383.25</td>
              <td>$61.32</td>
              <td>$1849.82</td>
            </tr>
            <tr>
              <td>5</td>
              <td>$9695.42</td>
              <td>$1,461.53</td>
              <td>$334.73</td>
              <td>$53.56</td>
              <td>$1849.82</td>
            </tr>
            <tr>
              <td>6</td>
              <td>$8,233.89</td>
              <td>$1,520.06</td>
              <td>$284.28</td>
              <td>$45.48</td>
              <td>$1849.82</td>
            </tr>
            <tr>
              <td>7</td>
              <td>$6,913.83</td>
              <td>$1,580.94</td>
              <td>$231.79</td>
              <td>$37.09</td>
              <td>$1849.82</td>
            </tr>
            <tr>
              <td>8</td>
              <td>$5,132.89</td>
              <td>$1,644.25</td>
              <td>$177.21</td>
              <td>$28.35</td>
              <td>$1849.82</td>
            </tr>
            <tr>
              <td>9</td>
              <td>$3,488.64</td>
              <td>$1,710.10</td>
              <td>$120.45</td>
              <td>$19.27</td>
              <td>$1849.82</td>
            </tr>
            <tr>
              <td>10</td>
              <td>$1,778.54</td>
              <td>$1,778.59</td>
              <td>$61.40</td>
              <td>$9.82</td>
              <td>$1849.82</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <hr>
</section>
<section>
  <div class="container">
    <div class="general-text general-text-b central-b quote-bullets">

      <ul>
        <li>
          <p>
            Lorem Ipsum es simplemente <span class="in-blue">82.86%</span>
          </p>
        </li>
        <li>
          <p>
            Lorem Ipsum ha sido el texto de relleno estándar de las industrias
            desde el año 1500, cuando un impresor
          </p>
        </li>
        <li>
          <p>
            Lorem <span class="in-blue">136.46%</span> sobrevivió 500 años,
            sino que  estándar de las indu estándar de las indu  estándar de las
             indu <span class="in-blue">01/10/2015</span>
          </p>
        </li>
        <li>
          <p>
            Lorem Ipsum ha sido el texto de relleno estándar de las industrias
            desde el año 1500, cuando un impresor
          </p>
        </li>
        <li>
          <p>
            Lorem Ipsum ha sido el texto de relleno estándar de las industrias
            desde el año 1500, cuando un impresor
          </p>
        </li>
      </ul>

  </div>
</section>



@stop
