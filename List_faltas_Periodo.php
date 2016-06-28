<?php


include "teste.php";
//criaçao de tabela mysql
$data = $_POST["data"] ;
$data2 = $_POST["data2"] ;

$atestadoMed    = 0;
$dispensa       = 0;
$injustificada  = 0;
$aniver         = 0;
$extrapola      = 0;
$arma           = 0;
$acompanhamento = 0;

        $query = mysqli_query($con,"SELECT tbcargo.POSTO_GRAD,TbEfetivoPM.MAT, TbEfetivoPM.NOME, Faltas.Post_serv, Faltas.Justificativa, tbServ.data, Faltas.obs FROM `Faltas` INNER JOIN `TbEfetivoPM` ON Faltas.Mat = TbEfetivoPM.mat INNER JOIN `tbcargo` ON TbEfetivoPM.CARGO = tbcargo.CARGOId INNER JOIN `tbServ` ON Faltas.id_Serv = tbServ.id WHERE tbServ.data BETWEEN '$data' AND '$data2'") ;

while($res = mysqli_fetch_array($query)){
    if ($res[4] == "Atestado Médico"){
        $atestadoMed++;
    }
    elseif($res[4] == "Dispensa de Serviço"){
        $dispensa++;
    }
    elseif($res[4] == "Injustificada"){
        $injustificada++;
    }
    elseif($res[4] == "Aniversário"){
        $aniver++;
    }
    elseif($res[4] == "Extrapolar a C.H."){
        $extrapola++;
    }
    elseif($res[4] == "Dispensa por Apreensão de Arma de Fogo"){
        $arma++;
    }
    elseif($res[4] == "Acompanhamento"){
        $acompanhamento++;
    }
}

?>
<!DOCTYPE html>
<html>
<head lang="pt-br">
    <meta charset="UTF-8">
    <title></title>
    <script type="text/javascript" src="js/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['MOTIVO', 'Hours per Day'],
                ['ATESTADOMÉDICO(NÃO HOMOLOGADO)', <? echo $atestadoMed ; ?>],
                ['DISPENSA DE SERVIÇO', <? echo $dispensa ; ?>],
                ['INJUSTIFICADA', <? echo $injustificada ; ?>],
                ['Aniversário', <? echo $aniver  ; ?>],
                ['Extrapolar a C.H.', <? echo $extrapola ; ?>],
                ['Dispensa por Apreensão de Arma de Fogo', <? echo $arma ?>],
                ['Acompanhamento', <? echo $acompanhamento ; ?>]

            ]);

            var options = {
                title: 'Tipo de Ocorrencia'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>

</head>

 <h4 id="center" align="center"> Faltas Registradas entre os dias <?php echo date("d/m/Y", strtotime($data))  ?> à <?php echo date("d/m/Y", strtotime($data2)) ?></h4>
    <br>
<table class="table table-bordered table-condensed">
    <tr>
        <td id="cima">Posto/Grad</td>
        <td id="cima">Matrícula</td>
        <td id="cima">Nome</td>
        <td id="cima">Tipo</td>
        <td id="cima">Posto de Serviço</td>
        <td id="cima">Observaçoes</td>

        <td id="cima">DATA</td>
        <td id="cima">Relatório</td>



    </tr>
<?php

//$sql ="SELECT * FROM `tbServ` WHERE `data` BETWEEN '$diaAnterior' AND '$data' " ;
$sql ="SELECT tbcargo.POSTO_GRAD,TbEfetivoPM.MAT, TbEfetivoPM.NOME, Faltas.Post_serv, Faltas.Justificativa, tbServ.data, Faltas.obs FROM `Faltas` INNER JOIN `TbEfetivoPM` ON Faltas.Mat = TbEfetivoPM.mat INNER JOIN `tbcargo` ON TbEfetivoPM.CARGO = tbcargo.CARGOId INNER JOIN `tbServ` ON Faltas.id_Serv = tbServ.id WHERE tbServ.data BETWEEN '$data' AND '$data2'" ;
$qry = mysqli_query($con, $sql);
      
while($resultado = mysqli_fetch_array($qry)) { ?>
    <tr>

        <td><?php echo $resultado[0]; ?></td>
        <td><?php echo $resultado[1]; ?></td>

        <td><?php echo $resultado[2]; ?></td>
        <td><?php echo $resultado[4]; ?></td>
        <td><?php echo $resultado[3]; ?></td>
        <?php $mat2 = $resultado[3]; ?>

        <td><?php echo $resultado[4]; ?></td>


        <td><?php echo date("d/m/Y", strtotime($resultado[5])); ?></td>
        <td><?php echo $resultado[6]; ?></td>
    </tr>


<?php } ?>
    <a href="pdf.php?data=<? echo $data ?>&data2=<? echo $data2 ?>" class="btn btn-facebook" >Exportar PDF</a>
</table>
   <? if($id != ""){
       include"list_oco2.php";
}
?>
<div id="piechart" style="width: 900px; height: 500px;"></div>

</html>