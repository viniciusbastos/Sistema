


<script>
    function Homici(){
        document.write("HOMICÍDIO")
    }
</script>

<?php
include "teste.php";
$query4 = mysqli_query($con,"SELECT * FROM `BAIRROS` ORDER BY `Campo1` ASC");

$data1  = $_POST["data1"];
$data2  = $_POST["data2"];
$tipo   = $_POST["tipo"];
$hrini  = $_POST["hr_ini"];
$hrfim  = $_POST["hr_fim"];
$bairro = $_POST["bairro"];

if($bairro == "TODOS"){
    $bairro = "%";

}
if($tipo == "TODOS"){
    $tipo = "%";

}
$query3 = mysqli_query($con,"SELECT * FROM `tipo de ocorrencias`");

//$query = "SELECT * FROM `ocorrencias` WHERE `Tipo` LIKE '$tipo' AND `Bairro` LIKE '$bairro' AND `Data` BETWEEN  '$data1' AND '$data2' AND `horario` BETWEEN '$hrini' AND '$hrfim'";
$query = "SELECT * FROM `ocorrencias` WHERE `Tipo` = 'HOMICÍDIO'";
$result = mysqli_query($con,$query) or die("Nao foi possivel");
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
        width: 1080px;
        height: 0px;
        position: absolute;
        top: 0px;
        left: 36%;
        margin-left: -100px;
        z-index: 5;
        background-color: #fff;
        padding: 0px;
        border: 1px solid #999;
    }
    .btn{
        background: #3498db;
        background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
        background-image: -moz-linear-gradient(top, #3498db, #2980b9);
        background-image: -ms-linear-gradient(top, #3498db, #2980b9);
        background-image: -o-linear-gradient(top, #3498db, #2980b9);
        background-image: linear-gradient(to bottom, #3498db, #2980b9);
        -webkit-border-radius: 28;
        -moz-border-radius: 28;
        border-radius: 28px;
        -webkit-box-shadow: 0px 1px 3px #666666;
        -moz-box-shadow: 0px 1px 3px #666666;
        box-shadow: 0px 1px 3px #666666;
        font-family: Arial;
        color: #ffffff;
        font-size: 12px;
        padding: 6px;
        text-decoration: none;
    }
</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=visualization"></script>
<script>
// Adding 500 Data Points
var map, pointarray, heatmap;

var taxiData = [
<?php while ($row = @mysqli_fetch_assoc($con, $result)){
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
    <form action="HeatTeste.php" method="post">
        <input type="date" name="data1" style="width: 120px">
        <input type="date" name="data2" style="width: 120px">
        <input type="time" name="hr_ini">
        <input type="time" name="hr_fim">
        <select name="tipo" value="<?php echo $tipo ?>" style="width: 160px">

                    <?php while($prod = mysqli_fetch_array($query3)) { ?>
                        <option> <?php echo $prod[0]; ?></option>
                    <?php } ?>
        </select>

        <select  name="bairro" style="width: 120px">
            <?php while($prod2 = mysqli_fetch_array($query4)) { ?>
                <option> <?php echo $prod2[0]; ?></option>
            <?php } ?>

        </select>
        <input type="submit" class="btn" value="Consultar">

    </form>



</div>
<div id="map-canvas"></div>
</body>
</html>