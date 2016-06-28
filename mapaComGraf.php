
            <?php
            include "teste.php";
            $query4 = mysqli_query($con,"SELECT * FROM `BAIRROS` ORDER BY `Campo1` ASC");
            $query3 = mysqli_query($con,"SELECT * FROM `tipo de ocorrencias`");

            ?>
<html>
<head>
<meta charset="utf-8">
<title>Heatmaps</title>
 <link rel="stylesheet" type="text/css" href="_css/mapaGraf.css">


                <?php
                $fr2        = 0;
                $fra        = 0 ;
                $fr         = 0 ;
                
                include "teste.php";

                $data       = $_POST["data"];
                $data2      = $_POST["data2"];
                $tipo       = $_POST["tipo"];
                $hrini      = $_POST["hr_ini"];
                $hrfim      = $_POST["hr_fim"];
                $bairro     = $_POST["bairro"];

                if($bairro == "TODOS"){
                    $bairro = "%";

                }
                if($tipo == "TODOS"){
                    $tipo = "%";

                }


                ?>




<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=visualization"></script>
<script>
// Adding 500 Data Points
var map, pointarray, heatmap;

var taxiData = [
<?php
    $query = "SELECT * FROM `ocorrencias` WHERE `Tipo` LIKE '$tipo' AND `Bairro` LIKE '$bairro' AND `Data` BETWEEN '$data' AND '$data2' AND `horario` BETWEEN '$hrini' AND '$hrfim'";
    $result = mysqli_query($con,$query);
    while ($row = mysqli_fetch_assoc($result)){
    // ADD TO XML DOCUMENT NODE
    echo 'new google.maps.LatLng(';
    echo  $row['Latitude'] .',';
    echo  $row['Longitude'] . '), ';

}?>
];

function initialize() {
    var mapOptions = {
        zoom: 14,
        center: new google.maps.LatLng(-12.208414, -38.992831),
        mapTypeId: google.maps.MapTypeId.HYBRID
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);
   <? if ($bairro =='Jardim Cruzeiro') {

            $bairro = 'Jardim%20Cruzeiro';

    }
    if ($bairro =='Asa Branca') {

        $bairro = 'Asa%20Branca';

    }
    if ($bairro =='Novo Horizonte') {

        $bairro = 'Novo%20Horizonte';

    }
    if ($bairro =='Campo Limpo') {

        $bairro = 'Campo_Limpo';
    }?>

    var kmlLayer = new google.maps.KmlLayer({
        url: 'http://65cipm.esy.es/Sistema/_css/<? echo $bairro;?>.kml',
        suppressInfoWindows: true,
        map: map
    });


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
<div id="titulo"><h3>MAPA DE DENSIDADE KERNEL</h3></div>
<div id="map-canvas">

</div>
<div>
    <br>
<hr>
<a href="index.php?link=17" class="btn" align="center">Voltar</a>
</div>
</body>
</html>