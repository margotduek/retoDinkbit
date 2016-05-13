<!doctype html>
<html>
<head>
  <title>Reto dinkbit</title>
  <link rel="stylesheet" href="css/app.css" charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <!-- include the jQuery and jQuery UI scripts -->
  <script src="https://code.jquery.com/jquery-2.1.1.js"></script>
  <script src="https://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

  <!-- plus a jQuery UI theme, here I use "flick" -->
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/flick/jquery-ui.css">


  <!-- Latest compiled JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!--Google Maps API-->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnycWatbGyK6ldFqErjFtko1yeMclNUOA&amp;sensor=true"></script>


</head>
<body>
<div class="container">
  <header> @include('layout.header') </header>
  <div class="contents"> @yield('content') </div>
  <footer> @include('layout.footer') </footer>
</div>
</body>
  <script>
    //navbar
      $(document).ready(function(){
        $(window).scroll(function() { // check if scroll event happened
          if ($(document).scrollTop() > 10) { // check if user scrolled more than 50 from top of the browser window
            $(".navbar-fixed-top").css("background-color", "#333333"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
          } else {
            $(".navbar-fixed-top").css("background-color", "transparent"); // if not, change it back to transparent
          }
        });
      });

      //Google maps
      function initialize() {
            var mapOptions = {
                center: new google.maps.LatLng(19.4051777, -99.23927449999996),
                zoom: 18,
                mapTypeId: google.maps.MapTypeId.Map,
                scrollwheel: false,
                draggable: false,
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: true,
                streetViewControl: true,
                overviewMapControl: true,
                rotateControl: true,
            };
var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
        }
google.maps.event.addDomListener(window, 'load', initialize);


//range
function myFunction() {
    var x = document.getElementById("myRange1").value;
    document.getElementById("number1").innerHTML = x;
}
function myFunction2() {
    var x = document.getElementById("myRange2").value;
    document.getElementById("number2").innerHTML = x;
}
  </script>
</html>
