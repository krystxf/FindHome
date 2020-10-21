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
    <img src="images/find-home-web" id="logo"></img>
    <ul>
      <li><a href="#map">MAPA</a></li>
      <li><a href="#">O PROJEKTU</a></li>
      <li><a href="#">KONTAKT</a></li>
    </ul>
  </div>

  <!-- form -->
  <div id="form">
    <div id="form-items">
      <div id="checkboxes">
        <label class="container">TEST
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
      </div>
      <button id="btn-comp">POSLAT</button>

      <a id="arrow-icon">
        <span class="left-bar"></span>
        <span class="right-bar"></span>
      </a>
    </div>
  </div>


  <!-- map -->
  <div id="map">
  </div>
  <!-- map-settings -->
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