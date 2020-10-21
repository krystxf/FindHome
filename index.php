<!DOCTYPE html>
<html>

<head>
  <!-- css -->
  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="styles/anim.css">

  <!-- map formscript -->
  <script src="scripts/form.js"></script>
  <!-- map javascript -->
  <script src="scripts/mapa.js"></script>

  <!-- favicon -->
  <link rel="icon" type="image/png" href="images/find-home.ico">

  <!-- map API -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqac8iFjKYK_AIRaoRxXfYaTJE3CSkmUI&callback=initMap&libraries=visualization&v=weekly" defer></script>

  <title>Find home</title>

</head>

<body onload="Load()">
  <!-- menu -->
  <div id="navbar">
    <a href="index.php"><img src="images/find-home-web" id="logo"></img></a>
    <ul>
      <li><a href="#map">MAPA</a></li>
      <li><a href="#">O PROJEKTU</a></li>
      <li><a href="kontakt.html">KONTAKT</a></li>
    </ul>
  </div>

  <!-- form -->
  <div id="form">
    <div id="form-items">
      <div id="checkboxes">
        <label class="container">POČET OBYVATEL
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
        <label class="container">DÉLKA ŽIVOTA
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
        <label class="container">NEZAMĚSTNANOST
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
        <label class="container">KVALITA OVZDUŠÍ
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
      </div>
    </div>
    <a id="arrow-icon" class="open">
        <span class="left-bar"></span>
        <span class="right-bar"></span>
      </a>
  </div>


  <!-- map -->
  <div id="map">
  </div>
  <!-- map-settings -->
  <div id="map-settings">
    <div id="opaciti-settings">
      opacity
      <input type="range" min="10" max="100" value="50" id="sliderValue">
    </div>

  </div>
  <?php
  echo "helou, tady bude ta pravá šmakuláááááááda";
  ?>


  <script src="scripts/mapa.js"></script>

</body>

</html>