<html>
<head>
    <meta charset="utf-8" />
    <title>Gerenciador de Tarefas</title>


    <?
    $sql = "SELECT  GU_SERV.GU, SUM(`Pessoas abordadas`), SUM(`Presos em flagrantes`), SUM(`Armas de fogo apreendidas`), SUM(`Pessoas conduzidas a CP`), SUM(`Veículos recuperados`), SUM(tbresumoestatistico.Maconha_Papelotes) FROM `tbresumoestatistico` INNER JOIN GU_SERV ON tbresumoestatistico.Gu_Serv = GU_SERV.Id INNER JOIN tbServ ON tbServ.id = GU_SERV.id_Serv WHERE tbServ.data BETWEEN '$data' AND '$data2'";

    $qry = mysqli_query($con, $sql) or die (mysql_error($con));
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
            ['Pessoas Conduzidas',<? echo $res[4]; ?>]

        ]);

        var options2 = {
            title: 'Tipo de Ocorrenca'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data2, options2);
    }
</script>
<style>
    .table-hover>tbody>tr:hover>td, .table-hover>tbody>tr:hover>th {
        background-color: #9f9f9f;
        color:#eeeeee;
    }
</style>
<body>

<h3 align="center">Quantidade de Ocorrencias por Período</h3>
        <div class="col-md-12" style="overflow-x:auto;">
                <div class="table-responsive">
                    <table  class="table table-hover table-bordered table-condensed table-striped ">
                        <thead style="background-color: rgba(49, 124, 234, 0.3)">
                            <tr>
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
                            <tr>
                        </thead>
        <?php

        include "teste.php";
        $data = $_POST["data"];
        $data2 = $_POST["data2"];




        $sql = "SELECT GU_SERV.PEL, GU_SERV.GU, SUM(`Pessoas abordadas`), SUM(`Presos em flagrantes`), SUM(`Armas de fogo apreendidas`), SUM(`Pessoas conduzidas a CP`), SUM(`TCO_lavrados`), SUM(tbresumoestatistico.Maconha_Papelotes), SUM(`Crack apreendida`), SUM(`Crack_Pedras`), SUM(`Adolescentes infratores`), SUM(`Veículos recuperados`),SUM(`Automóveis abordados`), SUM(`Motos abordadas`), SUM(`Veículos autuados`), SUM(`Motos autuados`), SUM(`Veículos apreendidaos`), SUM(`Motos  apreendidas`) FROM `tbresumoestatistico` INNER JOIN GU_SERV ON tbresumoestatistico.Gu_Serv = GU_SERV.Id INNER JOIN tbServ ON tbServ.id = GU_SERV.id_Serv WHERE tbServ.data BETWEEN '$data' AND '$data2' GROUP BY GU_SERV.PEL, GU_SERV.GU";


        $qry = mysqli_query($con, $sql) or die (mysql_error($con));

        while($res = mysqli_fetch_array($qry))  { ?>
            <tbody>
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
            </tbody>                     <?php }
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
            <?php } ?>
            </table>
            </div>
        </div>


<div id="piechart" style="width: 700px; height: 500px; "></div>



    <table class="table table-bordered" border="1" style="font-size:10pt ; text-align: center; border-spacing: 1px; border: 1px solid #000000 " id="relat">
        <caption>Produtividade do Pelotão</caption>
        <tr>
            <td id="cima">PELOTÃO</td>
            <td id="cima">GUARNIÇÃO</td>
            <td id="cima">PONTUAÇÃO</td>
        </tr>

        <?
        $sql3 = "SELECT GU_SERV.GU, GU_SERV.PEL, (`Armas de fogo apreendidas`*10 + `Presos em flagrantes`*7 + `TCO_lavrados`*5 +`Crack apreendida`*5 + `Cocaína apreendida`*4 ) PRODUTIVIDADE FROM `GU_SERV` INNER JOIN tbresumoestatistico ON GU_SERV.Id = tbresumoestatistico.Gu_Serv GROUP BY GU_SERV.GU, GU_SERV.PEL ORDER BY `PRODUTIVIDADE` DESC";
        $qry3 = mysqli_query($con, $sql3) or die (mysql_error($con));

        while($res3 = mysqli_fetch_array($qry3))  { ?>

        <tr>

            <td> <?php echo $res3[1]; ?>     </td>
            <td> <?php echo $res3[0]; ?>     </td>
            <td> <?php echo $res3[2]; ?>     </td>
        </tr>
        <? } ?>
        </table>


<br>
    <a href="http://localhost:8888/sistema/index.php?link=22" class="btn btn-facebook" align="center">Voltar</a>
<script type="text/javascript" src="js/loader.js"></script>

    </body>
</html>