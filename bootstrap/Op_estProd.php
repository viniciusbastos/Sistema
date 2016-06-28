<html>
<head>
    <meta charset="utf-8" />


    <?
    $sql = "SELECT  GU_SERV.GU, SUM(`Pessoas abordadas`), SUM(`Presos em flagrantes`), SUM(`Armas de fogo apreendidas`), SUM(`Pessoas conduzidas a CP`), SUM(`TCO_lavrados`), SUM(tbresumoestatistico.Maconha_Papelotes), SUM(`Crack apreendida`), SUM(`Adolescentes infratores`) FROM `tbresumoestatistico` INNER JOIN GU_SERV ON tbresumoestatistico.Gu_Serv = GU_SERV.Id INNER JOIN tbServ ON tbServ.id = GU_SERV.id_Serv WHERE tbServ.data BETWEEN '$data' AND '$data2'";

    $qry = mysqli_query($con, $sql) or die (mysqli_error($con));
    $res = mysqli_fetch_array($qry);

    ?>

                </head>


                <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart2);
                    function drawChart2() {

                        var data2 = google.visualization.arrayToDataTable([
                                ['Task', 'Hours per Day'],
                                ['Presos em Flagrante', <? echo $res[2] ?>],
                                ['Armas de Fogo Apreendidas',<? echo $res[3]; ?>],
                                ['Pessoas Conduzidas',<? echo $res[4]; ?>],
                                ['Adolescentes Apreendidos', <? echo $res[8]; ?>],
                                ['TCO', <? echo $res[5]; ?>],
                                ['Oc. Crack', <? echo $res[7]; ?>]


                        ]);

                        var options2 = {
                            title: 'Tipo de Ocorrenca'
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                        chart.draw(data2, options2);
                    }
                </script>

<body>


<div class="row">
    <div class="col-md-12" style="overflow-x:auto;">
        <h2 align="center">Produtividade por Período</h2>
        <table class="table table-bordered" >
        <thead>

        <th>PELOTÃO</th>
        <th>GUARNIÇÃO</th>
        <th>PESSOAS ABORDADAS</th>
        <th>PRESOS EM FLAGRANTE</th>
        <th>ARMAS DE FOGO APREENDIDAS</th>
        <th>PESSOAS CONDUZIDAS</th>
        <th>TCO</th>
        <th>Maconha Apreendida</th>
        <th>Oc com Crack</th>
        <th>N de pedras Crack</th>
        <th>Adolescentes Apreendidos</th>
        <th>Veículos Recuperados</th>
        <th>Veículos Abordados</th>
        <th>Motociclestas Abordadas</th>
        <th>Veículos Autuados</th>
        <th>Motociclestas Autuadas</th>
        <th>Veículos Apreendidos</th>
        <th>Motociclestas Apreendidas</th>
        </thead>
        <?php

        include "teste.php";
        $data = $_POST["data"];
        $data2 = $_POST["data2"];




        $sql = "SELECT GU_SERV.PEL, GU_SERV.GU, SUM(`Pessoas abordadas`), SUM(`Presos em flagrantes`), SUM(`Armas de fogo apreendidas`), SUM(`Pessoas conduzidas a CP`), SUM(`TCO_lavrados`), SUM(tbresumoestatistico.Maconha_Papelotes), SUM(`Crack apreendida`), SUM(`Crack_Pedras`), SUM(`Adolescentes infratores`), SUM(`Veículos recuperados`),SUM(`Automóveis abordados`), SUM(`Motos abordadas`), SUM(`Veículos autuados`), SUM(`Motos autuados`), SUM(`Veículos apreendidaos`), SUM(`Motos  apreendidas`) FROM `tbresumoestatistico` INNER JOIN GU_SERV ON tbresumoestatistico.Gu_Serv = GU_SERV.Id INNER JOIN tbServ ON tbServ.id = GU_SERV.id_Serv WHERE tbServ.data BETWEEN '$data' AND '$data2' GROUP BY GU_SERV.PEL, GU_SERV.GU";


        $qry = mysqli_query($con, $sql) or die (mysqli_error($con));

        while($res = mysqli_fetch_array($qry))  { ?>

        <tr>
            <td ><?php echo $res[0]; ?>     </td>
            <td> <?php echo $res[1]; ?>     </td>
            <td> <?php echo $res[2]; ?>     </td>
            <td> <?php echo $res[3]; ?>     </td>
            <td> <?php echo $res[4]; ?>     </td>
            <td> <?php echo $res[5]; ?>     </td>
            <td> <?php echo $res[6]; ?>     </td>
            <td> <?php echo $res[7]; ?>     </td>
            <td> <?php echo $res[8]; ?>     </td>
            <td> <?php echo $res[9]; ?>     </td>
            <td> <?php echo $res[10]; ?>     </td>
            <td> <?php echo $res[11]; ?>     </td>
            <td> <?php echo $res[12]; ?>     </td>
             <td> <?php echo $res[13]; ?>     </td>
            <td> <?php echo $res[14]; ?>     </td>
             <td> <?php echo $res[15]; ?>     </td>
             <td> <?php echo $res[16]; ?>     </td>
             <td> <?php echo $res[17]; ?>     </td>




    </tr>
                             <?php }
    $sql = "SELECT GU_SERV.PEL, GU_SERV.GU, SUM(`Pessoas abordadas`), SUM(`Presos em flagrantes`), SUM(`Armas de fogo apreendidas`), SUM(`Pessoas conduzidas a CP`), SUM(`TCO_lavrados`), SUM(tbresumoestatistico.Maconha_Papelotes), SUM(`Crack apreendida`), SUM(`Crack_Pedras`), SUM(`Adolescentes infratores`), SUM(`Veículos recuperados`), SUM(`Automóveis abordados`), SUM(`Motos abordadas`), SUM(`Veículos autuados`), SUM(`Motos autuados`), SUM(`Veículos apreendidaos`), SUM(`Motos  apreendidas`)  FROM `tbresumoestatistico` INNER JOIN GU_SERV ON tbresumoestatistico.Gu_Serv = GU_SERV.Id INNER JOIN tbServ ON tbServ.id = GU_SERV.id_Serv WHERE tbServ.data BETWEEN '$data' AND '$data2'";

    $qry = mysqli_query($con, $sql) or die (mysql_error($con));


     while($res = mysqli_fetch_array($qry))  { ?>

    <tr>
        <td >TODAS     </td>
        <td> TOTAL  </td>
        <td> <?php echo $res[2]; ?>     </td>
        <td> <?php echo $res[3]; ?>     </td>
        <td> <?php echo $res[4]; ?>     </td>
        <td> <?php echo $res[5]; ?>     </td>
        <td> <?php echo $res[6]; ?>     </td>
        <td> <?php echo $res[7]; ?>     </td>
        <td> <?php echo $res[8]; ?>     </td>
        <td> <?php echo $res[9]; ?>     </td>
        <td> <?php echo $res[10]; ?>     </td>
        <td> <?php echo $res[11]; ?>     </td>
        <td> <?php echo $res[12]; ?>     </td>
        <td> <?php echo $res[13]; ?>     </td>
        <td> <?php echo $res[14]; ?>     </td>
        <td> <?php echo $res[15]; ?>     </td>
        <td> <?php echo $res[16]; ?>     </td>
        <td> <?php echo $res[17]; ?>     </td>




    </tr>
<?php } ?>
</table>
    </div>
</div>
<br>
    <div class="row">
        <div id="piechart" class="col-sm-12"></div>
    </div>


    <table class="table table-bordered">
        <thead>
        <tr>
            <td id="cima">Data</td>
            <td id="cima">Pelotão</td>
            <td id="cima">Guarnição</td>
            <td id="cima">Quantidade</td>
        </tr>
        </thead>
       <h1 style="text-align: center">Armas de Fogo por dia</h1>
        <?
        $sql3 = "SELECT tbServ.data, GU_SERV.PEL, GU_SERV.GU,  `Armas de fogo apreendidas` 
        FROM  `tbresumoestatistico` 
        INNER JOIN GU_SERV ON tbresumoestatistico.Gu_Serv = GU_SERV.Id
        INNER JOIN tbServ ON tbServ.id = GU_SERV.id_Serv
        WHERE  `Armas de fogo apreendidas` >0
        AND tbServ.data
        BETWEEN  '$data' 
        AND '$data2'
        GROUP BY tbServ.data
        LIMIT 0 , 30
        ";
        $qry3 = mysqli_query($con, $sql3) or die (mysql_error($con));

        while($res3 = mysqli_fetch_array($qry3))  { ?>
         <tbody>
        <tr>

            <td> <?php echo date("d/m/Y", strtotime($res3[0])); ?>     </td>
            <td> <?php echo $res3[1]; ?>     </td>
            <td> <?php echo $res3[2]; ?>     </td>
            <td> <?php echo $res3[3]; ?>     </td>

        </tr>
         </tbody>
        <? } ?>
        </table>


<br>
<?
$sql = "SELECT GU_SERV.PEL, GU_SERV.GU, GU_SERV.MAT_CMT, SUM(`Pessoas abordadas`), SUM(`Presos em flagrantes`), SUM(`Armas de fogo apreendidas`), SUM(`Pessoas conduzidas a CP`), SUM(`TCO_lavrados`), SUM(tbresumoestatistico.Maconha_Papelotes), SUM(`Crack apreendida`), SUM(`Crack_Pedras`), SUM(`Adolescentes infratores`), SUM(`Veículos recuperados`) FROM `tbresumoestatistico` INNER JOIN GU_SERV ON tbresumoestatistico.Gu_Serv = GU_SERV.Id INNER JOIN tbServ ON tbServ.id = GU_SERV.id_Serv WHERE tbServ.data GROUP BY GU_SERV.PEL, GU_SERV.GU";
$qry = mysqli_query($con, $sql) or die (mysql_error($con));


?>


    <a href="http://65cipm.esy.es/Sistema/index.php?link=24" class="btn">Regras Produtividade</a>

    <input type="button" class="btn btn-default" href="http://65cipm.esy.es/Sistema/index.php?link=22"><a href="" class="btn btn-default" align="center">Voltar</a>
    </body>
</html>