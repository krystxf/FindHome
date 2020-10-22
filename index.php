<!DOCTYPE html>
<html>

<head>
  <!-- css -->
  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="styles/anim.css">

  <!-- favicon -->
  <link rel="icon" type="image/png" href="images/find-home.ico">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
          integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
          crossorigin=""/>
  
  <title>Find home</title>

</head>

<body onload="Load()">
  <div id="navbar">
    <a href="index.php"><img src="images/find-home-web" id="logo"></img></a>
    <ul>
      <li><a href="#map">MAPA</a></li>
      <li><a href="#">O PROJEKTU</a></li>
      <li><a href="web/contacts/kontakt.html">KONTAKTY</a></li>
    </ul>
  </div>

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

  <div id="map">
  </div>

  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
        integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
        crossorigin=""></script>

<script src="https://unpkg.com/topojson@3.0.2/dist/topojson.min.js"></script>

<script src="scripts/form.js"></script>
<script src="scripts/mapa.js"></script>
</body>

</html>