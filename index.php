<!DOCTYPE html>
<html>
  <head>
    <!-- css -->
    <link rel="stylesheet" href="index.css">
    <!-- map javascript -->
    <script src="index.js"></script>
    <title>Kde domov můj</title>
    <link rel="icon" type="image/png" href="images/find-home.ico">
    <!-- Radši bych to tady nechal pro jistotu-->
    <!-- <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>-->

	  <!-- map API -->
	  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqac8iFjKYK_AIRaoRxXfYaTJE3CSkmUI&callback=initMap&libraries=visualization&v=weekly" defer></script>
  </head>
  <body>
    <div id = "navbar">
          <img src="images/find-home-web" height="100%"></img>
          <ul>
          <li><a href="#">o nás</a></li>
          <li><a href="#">kontakt</a></li>
          <li><a href="#">mapa</a></li>
          </ul>
    </div>

    <div id="map">
    </div>
    <div id="map-settings">
    <ul>
          <li><a href="#">o nás</a></li>
          <li><a href="#">kontakt</a></li>
          <li><a href="#">mapa</a></li>
          </ul>
    </div>
  </body>
</html>