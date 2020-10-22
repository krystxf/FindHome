<!DOCTYPE html>
<html>

<head>
  <!-- css -->
  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="styles/anim.css">

  <!-- favicon -->
  <link rel="icon" type="image/png" href="images/find-home.ico">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Find home</title>

</head>

<body onload="Load()">
  <div id="navbar">
    <a href="index.php"><img src="images/find-home-web" id="logo"></img></a>
    <ul>
      <li><a href="#map">MAPA</a></li>
      <li><a href="web/about/about.html">O PROJEKTU</a></li>
      <li><a href="web/contacts/kontakt.html">KONTAKTY</a></li>
    </ul>
  </div>

  <div id="form">
    <div id="form-items">
      <div id="checkboxes">
        <div id="form-pocet-obyv">
          <h3>Počet obyvatel</h3>
          <div id="pocet-obyv">
            <input class="checkbox-obyvatele0" id="ob0" value="nula" name="obyvatele" type="radio">
            <label class="container" for="ob0">Málo
            </label>
          </div>

          <div id="pocet-obyv">
            <input class="checkbox-obyvatele1" id="ob1" value="1" name="obyvatele" type="radio" checked>
            <label class="container" for="ob1">Středně
            </label>
          </div>

          <div id="pocet-obyv">
            <input class="checkbox-obyvatele2" id="ob2" value="2" name="obyvatele" type="radio">
            <label class="container" for="ob2">Hodně
            </label>
          </div>
        </div>
      </div>

      <div id="form-delka-zivota">
        <h3>Délka života</h3>
        <input class="checkbox-delka-zivota" id="chck-zivot" type="checkbox">
        <label class="container" for="chck-zivot">Délka života
        </label>
      </div>

      <div id="form-nezamestnanost">
        <h3>Nezaměstnanost</h3>
        <input class="checkbox-delka-nezamestnanost" id="chck-nezames" type="checkbox">
        <label class="container" for="chck-nezames">Nezaměstnanost
        </label>
      </div>

      <div id="form-ovzdusi">
        <h3>Kvalita ovzduší</h3>
        <input type="range" class="slider-ovzdusi" name="obyvatele1" min="60" max="100">
        </label>
      </div>
    </div>
  </div>
  </div>
  <a id="arrow-icon" class="open">
    <span class="left-bar"></span>
    <span class="right-bar"></span>
  </a>
  </div>

  <div id="map">
  </div>

  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>

  <script src="https://unpkg.com/topojson@3.0.2/dist/topojson.min.js"></script>

  <script src="scripts/form.js"></script>
  <script src="scripts/mapa.js"></script>
</body>

</html>