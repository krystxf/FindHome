<!DOCTYPE html>
<html>

<head>
  <title>Geocoding Service</title>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqac8iFjKYK_AIRaoRxXfYaTJE3CSkmUI&callback=initMap&libraries=visualization&v=weekly" defer></script>

  <style type="text/css">
    #map {
      height: 100vh;
      width: 100vw;
    }
  </style>





  <script>
    function initMap() {
      const map = new google.maps.Map(document.getElementById("map"), { //create new map
        zoom: 8,
        center: {
          lat: 50,
          lng: 15
        },
      });

      okres = "Pardubice";
      fetch('https://hackathon.madhome.cf/api/getobce?okres=' + okres)
        .then(response => response.json())
        .then(data => {
          data.forEach(item => drawPoint(item.nazev, 20, map))
        });
        drawPoint("Starý Máteřov", 60, map);
    }

    function drawPoint(_address, _radius, _map) {
      const geocoder = new google.maps.Geocoder(); //create new geodecoder
      console.log(_address)
      geocoder.geocode({
          address: _address //set address to variable _address
        },
        (results, status) => {
          if (status === "OK") { //check if city exists
            var longtitude = results[0].geometry.location.lng(); //get longtitude
            var latitude = results[0].geometry.location.lat(); //get latitude

            heatmap = new google.maps.visualization.HeatmapLayer({ //draw heatmap
              map: _map, //set address to variable _map
              radius: _radius, //set address to variable _radius
              data: [new google.maps.LatLng(latitude, longtitude)] //add new point
            });
          }
          //else
          
        });
    }
  </script>
</head>

<body>
  <div id="map"></div>
</body>

</html>