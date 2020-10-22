
let map = L.map('map');
    map.setView([49.8, 15.6], 8);
    let bglayer_Positron = L.tileLayer('https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> &copy; <a href="http://cartodb.com/attributions">CartoDB</a>',
        subdomains: 'abcd',
        maxZoom: 19
    });

    bglayer_Positron.addTo(map);

    //extend Leaflet to create a GeoJSON layer from a TopoJSON file
    L.TopoJSON = L.GeoJSON.extend({
        addData: function (data) {
            var geojson, key;
            if (data.type === "Topology") {
                for (key in data.objects) {
                    if (data.objects.hasOwnProperty(key)) {
                        geojson = topojson.feature(data, data.objects[key]);
                        L.GeoJSON.prototype.addData.call(this, geojson);
                    }
                }
                return this;
            }
            L.GeoJSON.prototype.addData.call(this, data);
            return this;
        }
    });
    L.topoJson = function (data, options) {
        return new L.TopoJSON(data, options);
    };
    //create an empty geojson layer
    //with a style and a popup on click
    var geojson = L.topoJson(null, {
        style: function(feature){
            return {
                color: "#000",
                opacity: 1,
                weight: 1,
                fillColor: '#35495d',
                fillOpacity: 0.5,
            }
        },
        onEachFeature: function(feature, layer) {
            layer.bindPopup('<p>'+feature.properties.nazev+'</p>')
        }
    }).addTo(map);
    //fill: #317581;
    //define a function to get and parse geojson from URL
    async function getGeoData(url) {
        let response = await fetch(url);
        let data = await response.json();
        //console.log(data)
        return data;
    }

    //fetch the geojson and add it to our geojson layer
    getGeoData('json/gjs.topojson').then(data => geojson.addData(data));
