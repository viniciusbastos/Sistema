<html>
<head>
    <meta charset="utf-8" />
    <title>Gerenciador de Tarefas</title>




</head>


<body>

<h2 align="center">Produtividade por Período</h2>

<br>
<?
include "teste.php";
$sql = "SELECT GU_SERV.PEL, GU_SERV.GU, GU_SERV.MAT_CMT, SUM(`Pessoas abordadas`), SUM(`Presos em flagrantes`), SUM(`Armas de fogo apreendidas`), SUM(`Pessoas conduzidas a CP`), SUM(`TCO_lavrados`), SUM(tbresumoestatistico.Maconha_Papelotes), SUM(`Crack apreendida`), SUM(`Crack_Pedras`), SUM(`Adolescentes infratores`), SUM(`Veículos recuperados`), GU_SERV.GU, GU_SERV.PEL, (SUM(`Armas de fogo apreendidas`)*10 + SUM(`Presos em flagrantes`)*7 + SUM(`TCO_lavrados`)*5 + SUM(`Crack apreendida`)*5 + SUM(`Cocaína apreendida`)*4 ) PRODUTIVIDADE FROM `tbresumoestatistico` INNER JOIN GU_SERV ON tbresumoestatistico.Gu_Serv = GU_SERV.Id INNER JOIN tbServ ON tbServ.id = GU_SERV.id_Serv WHERE tbServ.data GROUP BY GU_SERV.PEL, GU_SERV.GU";
$qry = mysqli_query($con, $sql) or die (mysql_error($con));


?>
<table border="1" style="font-size:10pt ; text-align: center; border-spacing: 1px; border: 1px solid #000000 " id="relat">
    <tr>
        <td id="cima">PELOTÃO</td>
        <td id="cima">GUARNIÇÃO</td>
        <td id="cima">MAT</td>
        <td id="cima">POSTO/GRAD</td>
        <td id="cima">NOME</td>

        <td id="cima">PESSOAS ABORDADAS</td>
        <td id="cima">PRESOS EM FLAGRANTE</td>
        <td id="cima">ARMAS DE FOGO APREENDIDAS</td>
        <td id="cima">PESSOAS CONDUZIDAS</td>
        <td id="cima">TCO</td>
        <td id="cima">Maconha Apreendida</td>
        <td id="cima">Oc com Crack</td>
        <td id="cima">N de pedras Crack</td>
        <td id="cima">Adolescentes Apreendidos</td>
        <td id="cima">Veículos Recuperados</td>
        <td id="cima">PONTOS PRODUTIVIDADE</td>





    <tr>

    <tr>
        <? while($res = mysqli_fetch_array($qry)) { ?>
        <td ><?php echo $res[0]; ?>     </td>
        <td> <?php echo $res[1]; ?>     </td>
        <td> <?php echo $res[2]; ?>     </td>
        <?
        $sql2 = "SELECT `CARGO`,`NOME`  FROM `TbEfetivoPM` WHERE `MAT` = '$res[2]'";
        $qry2  = mysqli_query($con, $sql2) or die (mysql_error($con));
        $nome = mysqli_fetch_array($qry2);

        ?>
        <td> <?php echo $nome[0]; ?>     </td>
        <td> <?php echo $nome[1]; ?>     </td>

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





    </tr>
    <? } ?>

    ?> </table>


<a href="http://65cipm.esy.es/Sistema/index.php?link=22" class="btn" align="center">Voltar</a>
</body>
</html>