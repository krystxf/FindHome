let map, heatmap;

function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        zoom: 11,
        center: {
            lat: 50.035553,
            lng: 15.762851
        },
        mapTypeId: "terrain",
    });
    heatmap = new google.maps.visualization.HeatmapLayer({
        data: getPoints(),
        map: map,
    });
    heatmap.set("radius", 60);
}

function changeOpacity() {
    heatmap.set("opacity", heatmap.get("opacity") ? null : 0.2);
}

function getPoints() {
    return [
        new google.maps.LatLng(50.035553, 15.762851),
        new google.maps.LatLng(50.035553, 15.772851),
        new google.maps.LatLng(50.035553, 15.782851),
        new google.maps.LatLng(50.035553, 15.792851),
    ];
}