<html>
<head>
    <meta charset="utf-8" />
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="_css/mapaGraf.css" type="text/css">
    <?php
    $fr2    = 0 ;
    $fra    = 0 ;
    $fr     = 0 ;

    include "teste.php";

    $data   = $_POST["data"];
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

    $homicidio      = 0;
    $tentativa      = 0;
    $trafico        = 0;
    $porte          = 0;
    $roubomoto      = 0;
    $rouboAuto      = 0;
    $lesaoCorporal  = 0;
    $recupera       = 0;

    $qry = mysqli_query($con,"SELECT `tipo` FROM `ocorrencias` WHERE `Tipo` LIKE '$tipo' AND `Bairro` LIKE '$bairro' AND `Data` BETWEEN '$data' AND '$data2' AND `horario` BETWEEN '$hrini' AND '$hrfim'");
    while($res = mysqli_fetch_array($qry)){

        if ($res[0] == 'HOMICÍDIO') {
            $homicidio++;

        }

        elseif ($res[0] == 'TENTATIVA HOMICÍDIO') {
            $tentativa++;

        }
        elseif ($res[0] == 'TRÁFICO DE ENTORPECENTES') {
            $trafico++;

        }
        elseif ($res[0] == 'PORTE ILEGAL ARMA DE FOGO') {
            $porte++;

        }
        elseif ($res[0] == 'ROUBO MOTOCICLETA') {
            $roubomoto++;

        }
        elseif ($res[0] == 'ROUBO AUTOMÓVEL') {
            $roubomoto++;

        }
        elseif ($res[0] == 'LESÃO CORPORAL') {
            $lesaoCorporal++;

        }
        elseif ($res[0] == 'RECUPERAÇÃO DE VEICULOS ROUBADOS E OU FURTADOS') {
            $recupera++;

        }
        elseif ($res[0] == 'ROUBO AUTOMÓVEL') {
            $roubomoto++;

        }
    }
    ?>
    <script type="text/javascript" src="js/loader.js"></script>
    <script type="text/javascript">


        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['HOMICÍDIO', <? echo $homicidio ; ?>],
                ['TENTATIVA HOMICÍDIO', <? echo $tentativa ; ?>],
                ['TRÁFICO DE ENTORPECENTES', <? echo $trafico ; ?>],
                ['PORTE ILEGAL ARMA DE FOGO	', <? echo $porte ; ?>],
                ['ROUBO MOTOCICLETA	', <? echo $roubomoto ; ?>],
                ['ROUBO AUTOMÓVEL', <? echo $rouboAuto ; ?>],
                ['LESÃO CORPORAL', <? echo $lesaoCorporal ; ?>],
                ['RECUPERAÇÃO DE VEICULOS ROUBADOS E OU FURTADOS', <? echo $recupera ; ?>]
            ]);

            var options = {
                title: 'Tipo de Ocorrenca'

            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>

</head>
<body>
<br>
<div class="row">
<h3>Quantidade de Ocorrencias por Período</h3>
<br>
<br>

<table class="table table-hover table-bordered table-condensed table-striped ">
    <tr>
        <td id="cima">Tipo do Fato</td>
        <td id="cima">Qtd</td>
        <td id="cima">Frequencia Relativa</td>
        <td id="cima">Frequencia Relativa Acumulada</td>
        <td id="cima">Frequencia Acumulada</td>
    <tr>


        <?php
                $fr2    = 0 ;
                $fra    = 0 ;
                $fr     = 0 ;

                include "teste.php";

                $data   = $_POST["data"];
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



                $sql = "SELECT `tipo`, COUNT(`tipo`), `Latitude`,`Longitude` FROM `ocorrencias` WHERE `Tipo` LIKE '$tipo' AND `Bairro` LIKE '$bairro' AND `Data` BETWEEN '$data' AND '$data2' AND `horario` BETWEEN '$hrini' AND '$hrfim' GROUP BY `tipo` ORDER BY COUNT(`tipo`) DESC";

                $qry    = mysqli_query($con, $sql) or die ("nao foi possivel inserir os dados");
                $qry2   = mysqli_query($con, $sql);

                while($res2 = mysqli_fetch_array($qry2))  {
                     $fr = $fr + $res2[1] ;
                 }
                while($res = mysqli_fetch_array($qry))  {
        
                ?>

        <tr class="danger">
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
</div>
<br>


<body>
<div id="titulo"><h3>GRÁFICO DE DISTRIBUIÇÃO DE OCORRENCIAS</h3></div>
<div id="piechart" style="width: 900px; height: 500px; margin-right: 0px"></div>
    </body>
</html>