<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>webgis</title>
	<h1><center>Salak Mountain - Prabu Peak Hiking Track</center></h1>
	 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
     <script src="leaflet.ajax.js"></script>
     <script src="track.js"></script>
     <script src="point.js"></script>
</head>
<style type="text/css">
	#map {height: 600px;}
</style>
<body>
 <div id="map"></div>
</body>
 <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
     <script type="text/javascript">var map = L.map('map').setView([-6.685677501873867, 106.74186054539727], 14);
      L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
      var myStyle = {
    "color": "#ff7800",
    "weight": 5,
    "opacity": 0.65
};
      var track = L.geoJSON(track, {style: myStyle}).addTo(map);
      var point = L.geoJSON(point, {
  onEachFeature: function (feature, layer) {
    layer.bindPopup('<h1>'+feature.properties.Name+'</h1>');
  }
}).addTo(map);

    const popup = L.popup()
        .setLatLng([-6.685677501873867, 106.74186054539727])
        .setContent('I am a standalone popup.')
        .openOn(map);

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent(`You clicked the map at ${e.latlng.toString()}`)
            .openOn(map);
    }

    map.on('click', onMapClick);

</script>


</html>	