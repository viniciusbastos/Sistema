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

    if($bairro == "TODOS"){
        $bairro = "%";

    }
    if($tipo == "TODOS"){
        $tipo = "%";

    }
     

    $Asa_Branca         = 0 ;
    $Baraúnas           = 0 ;
    $Bom_viver          = 0 ;
    $Bonfim_de_Feira    = 0 ;
    $Calumbí            = 0 ;
    $Campo_Gado_Novo    = 0 ;
    $Campo_Limpo        = 0 ;
    $Caraíbas           = 0 ;
    $Centro             = 0 ;
    $Bom_Viver          = 0 ;
    $Diadema            = 0 ;
    $Expansão_Feira_IX  = 0 ;
    $Feira_IV           = 0 ;
    $Feira_IX           = 0 ;
    $Feira_VI           = 0 ;
    $Gabriela           = 0 ;
    $Galhardo           = 0 ;
    $Galileia           = 0 ;
    $George_Américo     = 0 ;
    $Homero_Figueredo   = 0 ;
    $Ipuaçú             = 0 ;
    $Jaguara            = 0 ;
    $Jardim_Cruzeiro    = 0 ;
    $José_Ronaldo       = 0 ;
    $Maria_Quiteria     = 0 ;
    $Monte_Pascoal      = 0 ;
    $Morada_das_Arvores = 0 ;
    $Nova_Esperança     = 0 ;
    $Novo_Horizonte     = 0 ;
    $Pampalona          = 0 ;
    $Pedra_do_Descanso  = 0 ;
    $Rua_Nova           = 0 ;
    $Sitio_Novo         = 0 ;
    $Sobradinho         = 0 ;
    $TODOS              = 0 ;
    $Três_Riachos       = 0 ;

    $qry = mysqli_query($con,"SELECT `bairro` FROM `ocorrencias` WHERE `Tipo` LIKE '$tipo'  AND `Data` BETWEEN '$data' AND '$data2' AND `horario` BETWEEN '$hrini' AND '$hrfim'");
    //$qry = mysql_query("SELECT * FROM BAIRROS");
    while($res = mysqli_fetch_array($qry)) {


        if ($res[0] == 'Asa Branca') {
            $Asa_Branca++;
        } elseif ($res[0] == 'Baraúnas') {

            $Baraúnas++;

        } elseif ($res[0] == 'Bom viver') {
            $Bom_viver++;
        } elseif ($res[0] == 'Bonfim de Feira') {


            $Bonfim_de_Feira++;
        } elseif ($res[0] == 'Calumbí') {
            $Calumbí++;
        } elseif ($res[0] == 'Campo do Gado Novo') {
            $Campo_Gado_Novo++;
        } elseif ($res[0] == 'Campo Limpo') {
            $Campo_Limpo++;
        } elseif ($res[0] == 'Caraíbas') {
            $Caraíbas++;
        } elseif ($res[0] == 'Centro') {
            $Centro++;
        } elseif ($res[0] == 'Conj. Bom Viver') {
            $Bom_Viver++;
        } elseif ($res[0] == 'Diadema') {
            $Diadema++;
        } elseif ($res[0] == 'Expansão do Feira IX') {
            $Expansão_Feira_IX++;
        } elseif ($res[0] == 'Feira IV') {
            $Feira_IV++;
        } elseif ($res[0] == 'Feira IX') {
            $Feira_IX++;
        } elseif ($res[0] == 'Feira VI') {
            $Feira_VI++;
        } elseif ($res[0] == 'Gabriela') {
            $Gabriela++;
        } elseif ($res[0] == 'Galhardo') {
            $Galhardo++;
        } elseif ($res[0] == 'Galileia') {
            $Galileia++;
        } elseif ($res[0] == 'George Américo') {
            $George_Américo++;
        } elseif ($res[0] == 'Homero Figueredo') {
            $Homero_Figueredo++;
        } elseif ($res[0] == 'Ipuaçú') {
            $Ipuaçú++;
        } elseif ($res[0] == 'Jaguara') {
            $Jaguara++;
        } elseif ($res[0] == 'Jardim Cruzeiro') {
            $Jardim_Cruzeiro++;
        } elseif ($res[0] == 'José Ronaldo') {
            $José_Ronaldo++;
        } elseif ($res[0] == 'Maria Quitéria') {
            $Maria_Quiteria++;
        } elseif ($res[0] == 'Monte Pascoal') {
            $Monte_Pascoal++;
        } elseif ($res[0] == 'Morada das Arvores') {
            $Morada_das_Arvores++;
        } elseif ($res[0] == 'Nova Esperança') {
            $Nova_Esperança++;
        } elseif ($res[0] == 'Novo Horizonte') {
            $Novo_Horizonte++;
        } elseif ($res[0] == 'Pampalona') {
            $Pampalona++;
        } elseif ($res[0] == 'Pedra do Descanso') {
            $Pedra_do_Descanso++;
        } elseif ($res[0] == 'Rua Nova') {
            $Rua_Nova++;
        } elseif ($res[0] == 'Sitio Novo') {
            $Sitio_Novo++;
        } elseif ($res[0] == 'Sobradinho') {
            $Sobradinho++;
        } elseif ($res[0] == 'TODOS') {
            $TODOS++;
        } elseif ($res[0] == 'Três Riachos') {
            $Três_Riachos++;

        }
    }

    ?>

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
                        text: 'Distribuição de ocorrencias por Bairro'
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
                        name: 'Quantidade de Ocorrencia Por Bairro',
                        data: [
                            ['Asa Branca', <? echo $Asa_Branca; ?>],
                            ['Baraúnas',<? echo $Baraúnas; ?>],
                            ['Bom viver',<? echo $Bom_Viver; ?>],
                            ['Bonfim de Feira',<? echo $Bonfim_de_Feira; ?>],
                            ['Calumbí',<? echo $Calumbí; ?>],
                            ['Campo do Gado Novo',<? echo $Campo_Gado_Novo; ?>],
                            ['Campo Limpo',<? echo $Campo_Limpo; ?>],
                            ['Caraíbas',<? echo $Caraíbas; ?>],
                            ['Centro',<? echo $Centro; ?>],
                            ['Conj. Bom Viver',<? echo $Bom_Viver; ?>],
                            ['Diadema', <? echo $Diadema ?>],
                            ['Expansão do Feira IX',<? echo $Expansão_Feira_IX; ?>],
                            ['Feira IV',<? echo $Feira_IV; ?>],
                            ['Feira IX',<? echo $Feira_IX; ?>],
                            ['Feira VI',<? echo $Feira_VI; ?>],
                            ['Gabriela',<? echo $Gabriela; ?>],
                            ['Galhardo',<? echo $Galhardo; ?>],
                            ['Galileia',<? echo $Galileia; ?>],
                            ['George Américo', <? echo $George_Américo; ?>],
                            ['Homero Figueredo',<? echo $Homero_Figueredo; ?>],
                            ['Ipuaçú',<? echo $Ipuaçú; ?>],
                            ['Jaguara',<? echo $Jaguara; ?>],
                            ['Jardim Cruzeiro',<? echo $Jardim_Cruzeiro; ?>],
                            ['José Ronaldo',<? echo $José_Ronaldo; ?>],
                            ['Maria Quitéria',<? echo $Maria_Quiteria; ?>],
                            ['Monte Pascoal',<? echo $Monte_Pascoal; ?>],
                            ['Morada das Arvores',<? echo $Morada_das_Arvores; ?>],
                            ['Nova Esperança',<? echo $Nova_Esperança; ?>],
                            ['Novo Horizonte',<? echo $Novo_Horizonte; ?>],
                            ['Pampalona',<? echo $Pampalona; ?>],
                            ['Pedra do Descanso',<? echo $Pedra_do_Descanso; ?>],
                            ['Rua Nova',<? echo $Rua_Nova; ?>],
                            ['Sitio Novo',<? echo $Sitio_Novo; ?>],
                            ['Sobradinho',<? echo $Sobradinho; ?>],
                            ['Três Riachos',<? echo $Três_Riachos; ?>]
                        ]
                    }]
                });
            });
        </script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>

    <div id="container" style="height: 400px"></div>
    <script type="text/javascript" src="js/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Quantidade de Ocorrencias Por Bairro'],
                ['Asa Branca', <? echo $Asa_Branca; ?>],
                ['Baraúnas',<? echo $Baraúnas; ?>],
                ['Bom viver',<? echo $Bom_Viver; ?>],
                ['Bonfim de Feira',<? echo $Bonfim_de_Feira; ?>],
                ['Calumbí',<? echo $Calumbí; ?>],
                ['Campo do Gado Novo',<? echo $Campo_Gado_Novo; ?>],
                ['Campo Limpo',<? echo $Campo_Limpo; ?>],
                ['Caraíbas',<? echo $Caraíbas; ?>],
                ['Centro',<? echo $Centro; ?>],
                ['Conj. Bom Viver',<? echo $Bom_Viver; ?>],
                ['Diadema', <? echo $Diadema ?>],
                ['Expansão do Feira IX',<? echo $Expansão_Feira_IX; ?>],
                ['Feira IV',<? echo $Feira_IV; ?>],
                ['Feira IX',<? echo $Feira_IX; ?>],
                ['Feira VI',<? echo $Feira_VI; ?>],
                ['Gabriela',<? echo $Gabriela; ?>],
                ['Galhardo',<? echo $Galhardo; ?>],
                ['Galileia',<? echo $Galileia; ?>],
                ['George Américo', <? echo $George_Américo; ?>],
                ['Homero Figueredo',<? echo $Homero_Figueredo; ?>],
                ['Ipuaçú',<? echo $Ipuaçú; ?>],
                ['Jaguara',<? echo $Jaguara; ?>],
                ['Jardim Cruzeiro',<? echo $Jardim_Cruzeiro; ?>],
                ['José Ronaldo',<? echo $José_Ronaldo; ?>],
                ['Maria Quitéria',<? echo $Maria_Quiteria; ?>],
                ['Monte Pascoal',<? echo $Monte_Pascoal; ?>],
                ['Morada das Arvores',<? echo $Morada_das_Arvores; ?>],
                ['Nova Esperança',<? echo $Nova_Esperança; ?>],
                ['Novo Horizonte',<? echo $Novo_Horizonte; ?>],
                ['Pampalona',<? echo $Pampalona; ?>],
                ['Pedra do Descanso',<? echo $Pedra_do_Descanso; ?>],
                ['Rua Nova',<? echo $Rua_Nova; ?>],
                ['Sitio Novo',<? echo $Sitio_Novo; ?>],
                ['Sobradinho',<? echo $Sobradinho; ?>],
                ['Três Riachos',<? echo $Três_Riachos; ?>]
            ]);

            var options = {
                title: 'Tipo de Ocorrenca'

            };

            var chart = new google.visualization.BarChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>

</head>
<body>
<br>
<br>
<h3 id="titulo" style="    background-color: #0450a1;
color: white;
    margin-bottom: 5px;
    text-align: center;
    border-radius: 15px;
    font-size: 12pt;
        text-shadow: 2px 2px 4px #000000;

    padding-top: 0.01px;">Quantidade de Ocorrencias por Período</h3>
<br>
<br>

<table border="1" style="border-spacing: 1px; border: 1px solid #000000 " id="relat">
    <tr>
        <td id="cima">Bairro</td>

        <td id="cima">Tipo do Fato</td>
        <td id="cima">Qtd</td>
        <td id="cima">Frequencia Relativa</td>
        <td id="cima">Frequencia Relativa Acumulada</td>
        <td id="cima">Frequencia Acumulada</td>
    <tr>
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



        $sql = "SELECT `tipo`, COUNT(`tipo`),`Bairro`, `Latitude`,`Longitude` FROM `ocorrencias` WHERE `Tipo` LIKE '$tipo' AND `Data` BETWEEN '$data' AND '$data2' AND `horario` BETWEEN '$hrini' AND '$hrfim' GROUP BY `tipo`, `Bairro` ORDER BY `Bairro` ASC";
        $qry = mysqli_query($con,$sql) or die (mysqli_error($con));
        $qry2 = mysqli_query($con,$sql)
        ?>
        <?php while($res2 = mysqli_fetch_array($qry2))  { ?>
            <?php $fr = $fr + $res2[1]  ?>
        <?php } ?>
        <?php while($res = mysqli_fetch_array($qry))  { ?>

        <tr>
        <td ><?php echo $res[2]; ?> </td>

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


<body>
<div id="titulo"><h3>GRÁFICO DE DISTRIBUIÇÃO DE OCORRENCIAS</h3></div>
<div id="piechart" style="width: 900px; height: 700px; margin-right: 0px"></div>
    </body>
</html>