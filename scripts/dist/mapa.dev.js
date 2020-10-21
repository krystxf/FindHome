"use strict";

function initMap() {
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 8,
    center: {
      lat: 50,
      lng: 15
    }
  });
  var geocoder = new google.maps.Geocoder();
  zmrdeVykresliBod("Pardubice", geocoder, map, 60);
}

function zmrdeVykresliBod(address, geocoder, resultsMap, radius) {
  geocoder.geocode({
    address: address
  }, function (results, status) {
    if (status === "OK") {
      heatmap = new google.maps.visualization.HeatmapLayer({
        map: resultsMap,
        radius: radius,
        data: [new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng())] //getPoints(results[0].geometry.location.lat(), results[0].geometry.location.lng()),

      });
    } else console.log("FUCK, něco se tady masivně posralo");
  });
}