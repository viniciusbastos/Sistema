<script>
    function Homici(){
        document.write("HOMICÍDIO")
    }
</script>

<?php
include "config.php";
$query = "SELECT * FROM `ocorrencias` WHERE `Tipo` LIKE 'HOMICÍDIO'";
$result = mysql_query($query);
?>
<html>
<head>
<meta charset="utf-8">
<title>Heatmaps</title>
<style>
    html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
    }
    #panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
    }
</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=visualization"></script>
<script>
// Adding 500 Data Points
var map, pointarray, heatmap;

var taxiData = [
<?php while ($row = @mysql_fetch_assoc($result)){
    // ADD TO XML DOCUMENT NODE
    echo 'new google.maps.LatLng(';
    echo  $row['Latitude'] .',';
    echo  $row['Longitude'] . '), ';

}?>
];

function initialize() {
    var mapOptions = {
        zoom: 13,
        center: new google.maps.LatLng(-12.2678246, -38.9640042),
        mapTypeId: google.maps.MapTypeId.SATELLITE
    };

    map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);

    var pointArray = new google.maps.MVCArray(taxiData);

    heatmap = new google.maps.visualization.HeatmapLayer({
        data: pointArray
    });

    heatmap.setMap(map);
}

function toggleHeatmap() {
    heatmap.setMap(heatmap.getMap() ? null : map);
}

function changeGradient() {
    var gradient = [
        'rgba(0, 255, 255, 0)',
        'rgba(0, 255, 255, 1)',
        'rgba(0, 191, 255, 1)',
        'rgba(0, 127, 255, 1)',
        'rgba(0, 63, 255, 1)',
        'rgba(0, 0, 255, 1)',
        'rgba(0, 0, 223, 1)',
        'rgba(0, 0, 191, 1)',
        'rgba(0, 0, 159, 1)',
        'rgba(0, 0, 127, 1)',
        'rgba(63, 0, 91, 1)',
        'rgba(127, 0, 63, 1)',
        'rgba(191, 0, 31, 1)',
        'rgba(255, 0, 0, 1)'
    ]
    heatmap.set('gradient', heatmap.get('gradient') ? null : gradient);
}

function changeRadius() {
    heatmap.set('radius', heatmap.get('radius') ? null : 20);
}

function changeOpacity() {
    heatmap.set('opacity', heatmap.get('opacity') ? null : 0.2);
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>
</head>

<body>
<div id="panel">
    <button onclick="toggleHeatmap()">Desativar Mapa de Calor</button>
    <button onclick="changeGradient()">Mudar gradiente</button>
    <button onclick="changeRadius()">Change radius</button>
    <button onclick="changeOpacity()">Mudar opacitidade</button>
</div>
<div id="map-canvas"></div>
</body>
</html>