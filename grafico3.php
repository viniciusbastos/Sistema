

    <?php
    $fr2     = 0;
    $fra     = 0;
    $fr      = 0;

    include "teste.php";

    $data   = '2016-01-01';
    $data2  = '2016-01-31';
    $tipo   = $_POST["tipo"];
    $hrini  ='00:00';
    $hrfim  ='23:59';
    $bairro ='TODOS';

    if($bairro == "TODOS"){
        $bairro = "%";

    }
    if($tipo == "TODOS"){
        $tipo = "%";

    }

    $homicidio      = 0;
    $tentativa      = 0;
    $trafico        = 0;
    $porte          = 0;
    $roubomoto      = 0;
    $rouboAuto      = 0;
    $lesaoCorporal  = 0;
    $recupera       = 0;

    $qry = mysql_query("SELECT `tipo`, COUNT(`tipo`) FROM `ocorrencias` WHERE `Tipo` LIKE 'TENTATIVA HOMICÍDIO' AND `Bairro` LIKE '$bairro' AND `Data` BETWEEN '$data' AND '$data2' AND `horario` BETWEEN '$hrini' AND '$hrfim' GROUP BY `tipo` ORDER BY COUNT(`tipo`) DESC");

    $res = mysqli_fetch_array($qry);
    if($res[1] != ''){
        $tentativa = $res[1];
    }

    $qry2 = mysql_query("SELECT `tipo`, COUNT(`tipo`) FROM `ocorrencias` WHERE `Tipo` LIKE 'HOMICÍDIO' AND `Bairro` LIKE '$bairro' AND `Data` BETWEEN '$data' AND '$data2' AND `horario` BETWEEN '$hrini' AND '$hrfim' GROUP BY `tipo` ORDER BY COUNT(`tipo`) DESC");
    mysql_error($link);
    $res2 = mysql_fetch_array($qry2);
    if($res2[1] != ''){
        $homicidio = $res2[1];
    }


    $qry3 = mysql_query("SELECT `tipo`, COUNT(`tipo`) FROM `ocorrencias` WHERE `Tipo` LIKE 'TRÁFICO DE ENTORPECENTES' AND `Bairro` LIKE '$bairro' AND `Data` BETWEEN '$data' AND '$data2' AND `horario` BETWEEN '$hrini' AND '$hrfim' GROUP BY `tipo` ORDER BY COUNT(`tipo`) DESC");
    mysql_error($link);
    $res3 = mysql_fetch_array($qry3);
    if($res3[1] != ''){
        $trafico = $res3[1];
    }


    $qry4 = mysql_query("SELECT `tipo`, COUNT(`tipo`) FROM `ocorrencias` WHERE `Tipo` LIKE 'PORTE ILEGAL ARMA DE FOGO' AND `Bairro` LIKE '$bairro' AND `Data` BETWEEN '$data' AND '$data2' AND `horario` BETWEEN '$hrini' AND '$hrfim' GROUP BY `tipo` ORDER BY COUNT(`tipo`) DESC");
    mysql_error($link);
    $res4 = mysql_fetch_array($qry4);
    if($res4[1] != ''){
        $porte = $res4[1];
    }


    $qry5 = mysql_query("SELECT `tipo`, COUNT(`tipo`) FROM `ocorrencias` WHERE `Tipo` LIKE 'ROUBO MOTOCICLETA' AND `Bairro` LIKE '$bairro' AND `Data` BETWEEN '$data' AND '$data2' AND `horario` BETWEEN '$hrini' AND '$hrfim' GROUP BY `tipo` ORDER BY COUNT(`tipo`) DESC");
    mysql_error($link);
    $res5 = mysql_fetch_array($qry5);
    if($res5[1] != ''){
        $roubomoto = $res5[1];
    }


    $qry6 = mysql_query("SELECT `tipo`, COUNT(`tipo`) FROM `ocorrencias` WHERE `Tipo` LIKE 'ROUBO AUTOMÓVEL' AND `Bairro` LIKE '$bairro' AND `Data` BETWEEN '$data' AND '$data2' AND `horario` BETWEEN '$hrini' AND '$hrfim' GROUP BY `tipo` ORDER BY COUNT(`tipo`) DESC");
    mysql_error($link);
    $res6 = mysql_fetch_array($qry6);
    if($res6[1] != ''){
        $rouboAuto = $res5[1];
    }
    $qry7 = mysql_query("SELECT `tipo`, COUNT(`tipo`) FROM `ocorrencias` WHERE `Tipo` LIKE 'LESÃO CORPORAL' AND `Bairro` LIKE '$bairro' AND `Data` BETWEEN '$data' AND '$data2' AND `horario` BETWEEN '$hrini' AND '$hrfim' GROUP BY `tipo` ORDER BY COUNT(`tipo`) DESC");
    mysql_error($link);
    $res7 = mysql_fetch_array($qry7);
    if($res7[1] != ''){
        $lesaoCorporal = $res7[1];
    }
    $qry8 = mysql_query("SELECT `tipo`, COUNT(`tipo`) FROM `ocorrencias` WHERE `Tipo` LIKE 'RECUPERAÇÃO DE VEICULOS ROUBADOS E OU FURTADOS' AND `Bairro` LIKE '$bairro' AND `Data` BETWEEN '$data' AND '$data2' AND `horario` BETWEEN '$hrini' AND '$hrfim' GROUP BY `tipo` ORDER BY COUNT(`tipo`) DESC");
    mysql_error($link);
    $res8 = mysql_fetch_array($qry8);
    if($res8[1] != ''){
        $recupera = $res8[1];
    }

    ?>

        <?php
        $fr2 = 0;
        $fra = 0 ;
        $fr = 0 ;
        include "teste.php";
        $data = $_POST["data"];
        $data2 = $_POST["data2"];
        $tipo = $_POST["tipo"];
        $hrini =$_POST["hr_ini"];
        $hrfim =$_POST["hr_fim"];
        $bairro =$_POST["bairro"];

        if($bairro == "TODOS"){
            $bairro = "%";

        }
        if($tipo == "TODOS"){
            $tipo = "%";

        }



        $sql = "SELECT `tipo`, COUNT(`tipo`), `Latitude`,`Longitude` FROM `ocorrencias` WHERE `Tipo` LIKE '$tipo' AND `Bairro` LIKE '$bairro' AND `Data` BETWEEN '$data' AND '$data2' AND `horario` BETWEEN '$hrini' AND '$hrfim' GROUP BY `tipo` ORDER BY COUNT(`tipo`) DESC";
        $qry = mysql_query($sql) or die ("nao foi possivel inserir os dados");
        $qry2 = mysql_query($sql)
        ?>
        <?php while($res2 = mysql_fetch_array($qry2))  { ?>
            <?php $fr = $fr + $res2[1]  ?>
        <?php } ?>
        <?php while($res = mysql_fetch_array($qry))  { ?>

    <tr>
        <td ><?php echo $res[0]; ?> </td>
        <td> <?php echo $res[1]; ?>   </td>
        <td align="center">  <?php echo number_format(($res[1]/$fr*100),2,",",".")."%"; ?>  </td>

        <td align="center"><?php

            echo number_format($fr2 = (($res[1]/$fr*100) + $fr2),2)."%"; ;
            ?></td>
        <td align="center"> <?php echo $fra = $fra + $res[1]; ?></td>
    </tr>
    <?php } ?>
</table>
<br>
<br>


<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Browser market shares at a specific website, 2014'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: [
                ['HOMICÍDIO', <? echo $homicidio ; ?>],
                ['TENTATIVA HOMICÍDIO', <? echo $tentativa ; ?>],
                ['TRÁFICO DE ENTORPECENTES', <? echo $trafico ; ?>],
                ['PORTE ILEGAL ARMA DE FOGO	', <? echo $porte ; ?>],
                ['ROUBO MOTOCICLETA	', <? echo $roubomoto ; ?>],
                ['ROUBO AUTOMÓVEL', <? echo $rouboAuto ; ?>],
                ['LESÃO CORPORAL', <? echo $lesaoCorporal ; ?>],
                ['RECUPERAÇÃO DE VEICULOS ROUBADOS E OU FURTADOS', <? echo $recupera ; ?>]



            ]
        }]
    });
});
		</script>
	</head>
	<body>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="height: 400px"></div>
	</body>
</html>
