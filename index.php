<!DOCTYPE html>
<html>

<head>
  <!-- css -->
  <link rel="stylesheet" href="index.css">
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

  <div id="form">
    <div id="check">
      <input type="checkbox" id="box-1">
      <label for="box-1">TEST</label>
    </div>
    <div type="button" id="comp" onclick="comp()">Vyhodnoť</div>
  </div>

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