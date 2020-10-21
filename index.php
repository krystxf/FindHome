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
    <div id = "title">
    </div>


    <div id="floating-panel">
      <button onclick="changeOpacity()">Change opacity</button>
    </div>
    <div id = "content">
  <div id="form">
    <h2>Form</h2>
    <form>

</form>
  </div>
  <div id="right">
    <div id="map">
    </div>
    <div id="map-settings">
    </div>
</div>
</div>
<div id ="table">
</table>
  </body>
</html>