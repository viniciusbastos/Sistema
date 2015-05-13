<?php


include "teste.php";
//criaçao de tabela mysql
$data = date('y-m-d');
//$acao = $_GET["acao"];
$diaAnterior = gmdate("y-m-d",time()-(3600*27));


?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>

 <h2 id="center">Tabelas contendo OPO`s de <?php echo date("d/m/Y", strtotime($diaAnterior))  ?> à <?php echo date("d/m/Y", strtotime($data)) ?></h2>
    
<table width="830px" border="1" id="opo">
    <tr>
        <td id="cima">Id</td>
        <td id="cima">Turno</td>
        <td id="cima">Viatura</td>
        <td id="cima">Data</td>
        <td id="cima">Matrícula</td>
        <td id="cima">Nome</td>
        <td id="cime">Alterar</td>

        </tr>
<?php

$sql ="SELECT * FROM `tbServ` WHERE `data` BETWEEN '$diaAnterior' AND '$data' " ;
$qry = mysql_query($sql);



while($resultado = mysql_fetch_array($qry)) { ?>
    <tr>

        <td><?php echo $resultado[0]; ?></td>
        <td><?php echo $resultado[2]; ?></td>
        <td><?php echo $resultado[3]; ?></td>
        <td><?php echo date("d/m/Y", strtotime($resultado[1])); ?></td>
        <td><?php echo $resultado[4]; ?></td>
        <td><?php echo $nome[0]; ?></td>
        <td><a href="index.php?link=2&acao=Inserir&id=<?php echo $resultado[0]; ?>">Lançar Ocorrencia</a></td>

    </tr>


<?php } ?>

    <?php
    $sql2 =  "SELECT `NOME` FROM `tbefetivopm` INNER JOIN `tbServ` ON 'MATRÍCULA' = 'Mat_cmt' WHERE ((('Mat_cmt')='echo $resultado[4]'))";
    $qry2= mysql_query($sql2) or die ("nao foi possivel inserir os dados");
    $res = mysql_fetch_array($qry2);
    echo $res[0];
        ?>


</html>