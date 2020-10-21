<!DOCTYPE html>
<html>

<head>
  <!-- css -->
  <link rel="stylesheet" href="styles/index.css">
  <!-- map javascript -->
  <script src="scripts/form.js"></script>
  <script src="scripts/mapa.js"></script>
  <title>Find home</title>
  <link rel="icon" type="image/png" href="images/find-home.ico">

  <!-- Radši bych to tady nechal pro jistotu-->
  <!-- <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>-->

  <!-- map API -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqac8iFjKYK_AIRaoRxXfYaTJE3CSkmUI&callback=initMap&libraries=visualization&v=weekly" defer></script>
</head>

<body>
  <div id="navbar">
    <img src="images/find-home-web" id="logo"></img>
    <ul>
      <li><a href="#map">MAPA</a></li>
      <li><a href="#">O PROJEKTU</a></li>
      <li><a href="#">KONTAKT</a></li>
    </ul>

  </div>

  <form id="form" action="index.php" method="GET">
    <div id="checkboxes">
    <label class="container">TEST
      <input type="checkbox">
      <span class="checkmark"></span>
    </label>
    </div>
  </form>

  <div id="map">
  </div>
  <div id="map-settings">
    <ul>
      <li><a onclick="changeOpacity()">opacity</a></li>
    </ul>
  </div>
  <?php
  echo "helou, tady bude ta pravá šmakuláááááááda";
  ?>

</body>

</html>