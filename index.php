<!DOCTYPE html>
<html>
  <head>
    <!-- css -->
    <link rel="stylesheet" href="index.css">
    <!-- map javascript -->
    <script src="index.js"></script>
    <title>Kde domov můj</title>
    <!-- Radši bych to tady nechal pro jistotu-->
    <!-- <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>-->

	  <!-- map API -->
	  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqac8iFjKYK_AIRaoRxXfYaTJE3CSkmUI&callback=initMap&libraries=visualization&v=weekly" defer></script>
  </head>
  <body>
    <div id = "title">
kde domov můj
  </div>


    <div id="floating-panel">
      <button onclick="changeOpacity()">Change opacity</button>
    </div>
  <div id="form">
    
</div>
    <div id="map">
    </div>
  </body>
</html>