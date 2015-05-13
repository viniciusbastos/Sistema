<?php


include "teste.php";
//criaçao de tabela mysql
$id = $_GET["id"];
$acao = "Inserir";

$sql = "SELECT * FROM `Servico`";
$qry = mysql_query($sql);
$resultado = mysql_fetch_array($qry);


$query = mysql_query("SELECT * FROM `tipo de ocorrencias` ORDER BY `tipo de ocorrencias`.`Servico` ASC");
$query2 = mysql_query("SELECT `Viaturas` FROM `viaturas`");
$query3 = mysql_query("SELECT * FROM `BAIRROS` ORDER BY `Campo1` ASC");


$data = $resultado[1];
$turno = $resultado[2];


?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Relatório Of. Coordenador</title>
</head>
<body>
<form  method="post">
    <h2>Estatística por Período</h2>
    <fieldset><legend></legend>
    <fieldset> <legend>Data</legend></br></br>
        Inicial: <input type="date" name="data" ">
        Final: <input type="date" name="data2" ">
    </fieldset>
    <fieldset><legend>Horário</legend>
        Inicial: <input type="time" name="hr_ini">
        Final: <input type="time" name="hr_fim">

    </fieldset>
        <fieldset>
            <legend>Bairro</legend>

            Bairro: <select style=width:200px name="bairro"></br>
                <?php while($prod2 = mysql_fetch_array($query3)) { ?>
                    <option> <?php echo $prod2[0]; ?></option>
                <?php } ?>

            </select>
        </fieldset>

        Tipo: <select style=width:230px name="tipo" > </br>
        <?php while($prod = mysql_fetch_array($query)) { ?>
            <option> <?php echo $prod[0]; ?></option>
        <?php } ?>

        <p>
         </select>
        <input type="submit" value="CONSULTAR">
    </p>
    </fieldset>
</form>
<?php include "Op_estatistica.php"; ?>



<script>
    function Homici(){
        document.write("HOMICÍDIO")
    }
</script>

<?php

include "teste.php";
$data = $_POST["data"];
$data2 = $_POST["data2"];
$tipo = $_POST["tipo"];
$hrini =$_POST["hr_ini"];
$hrfim =$_POST["hr_fim"];
$bairro =$_POST["bairro"];
echo $bairro;
if($bairro == "TODOS"){
    $bairro = "%";
    echo $bairro;
}



$sql = "SELECT `tipo`, COUNT(`tipo`), `Latitude`,`Longitude` FROM `ocorrencias` WHERE `Tipo` LIKE '$tipo' AND `Bairro` LIKE '$bairro' AND `Data` BETWEEN '$data' AND '$data2' AND `horario` BETWEEN '$hrini' AND '$hrfim' GROUP BY `tipo` ";
$qry = mysql_query($sql) or die ("nao foi possivel inserir os dados");

?>


    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=visualization"></script>
    <script>
        // Adding 500 Data Points
        var map, pointarray, heatmap;

        var taxiData = [
            <?php while ($row = @mysql_fetch_assoc($qry)){
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


<div id="panel">
    <button onclick="toggleHeatmap()">Desativar Mapa de Calor</button>
    <button onclick="changeGradient()">Mudar gradiente</button>
    <button onclick="changeRadius()">Change radius</button>
    <button onclick="changeOpacity()">Mudar opacitidade</button>
</div>
<div id="map-canvas"></div>
</body>
</html>
