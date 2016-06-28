<?php


include "teste.php";
//criaçao de tabela mysql
//$data = date('y-m-d');
//$acao = $_GET["acao"];
//$diaAnterior = gmdate("y-m-d",time()-(3600*27));
//*listar armas de fogo apreendidas
$id     = $_GET["id"];
$data   = $_GET["data"];

?>
<!DOCTYPE html>
<html>
    <head lang="pt-br">
        <meta charset="UTF-8">
        <title>Relatório Of. Coordenador</title>
    </head>
<body>
<br>
<br>

<h3 style="text-align: center">Lista de Ocorrencias</h3>
<?  if ($data == '') { ?>
<table id="relat">
    <tr>
        <td id="cima">Tipo</td>
        <td id="cima">Matrícula</td>
        <td id="cima">Posto/Grad</td>
        <td id="cima">Nome</td>
        <td id="cima">Posto de Serviço</td>
        <td id="cima">Justificativa</td>
        <td id="cima">Observaçoes</td>
        <td id="cima">Excluir</td>

    </tr>
    <?php

    //$sql ="SELECT * FROM `tbServ` WHERE `data` BETWEEN '$diaAnterior' AND '$data' " ;
    $sql ="SELECT * FROM `Faltas` WHERE `id_Serv` = $id" ;
    $qry = mysqli_query($con,$sql);

    while($resultado = mysqli_fetch_array($qry)) { ?>
        <tr>

            <td>Falta</td>
            <td><?php echo $resultado[2]; ?></td>
            <?php $mat = $resultado[2];
            $sql2 = "SELECT Faltas.Mat, tbefetivopm.NOME, tbcargo.POSTO_GRAD FROM (tbefetivopm INNER JOIN Faltas ON tbefetivopm.MAT = Faltas.Mat) INNER JOIN tbcargo ON tbefetivopm.CARGO = tbcargo.CARGOId WHERE (((Faltas.Mat)='$mat'))";
            $qry2= mysqli_query($con, $sql2) or die ("nao foi possivel inserir os dados");
            $res2 = mysqli_fetch_array($qry2);
            ?>
            <td><?php echo $res2[2]; ?></td>
            <td><?php echo $res2[1]; ?></td>
            <td><?php echo $resultado[3]; ?></td>
            <?php $mat2 = $resultado[3]; ?>
            <td><?php echo $resultado[4]; ?></td>

            <td><?php echo $resultado[5]; ?></td>
            <td><a href="excluirFalta.php?id=<? echo $resultado[1] ?>&mat=<?php echo $resultado[2]; ?>"><center><img src="_imagens/deletered%20cópia.png"></center></a></td>

        </tr>


    <?php } ?>
</table>

<br>
<br>
<table id="relat" >
    <tr>
        <td id="cima">TIPO</td>
        <td id="cima">Mat</td>
        <td id="cima">Posto/Grad</td>
        <td id="cima">Nome Substituído</td>
        <td id="cima">Mat</td>
        <td id="cima">Posto/Grad</td>
        <td id="cima">Nome Substituto</td>
        <td id="cima">Posto de Serviço</td>
        <td id="cima">Excluir</td>


    </tr>
    <?php


    $sql2 ="SELECT * FROM `Permutas` WHERE `id_Serv` = $id" ;
    $qry2 = mysqli_query($con, $sql2);

    while($resultado1 = mysqli_fetch_array($qry2)) { ?>
        <tr>

            <td>PERMUTA</td>
            <td><?php echo $resultado1[2]; ?></td>
            <?php $mat = $resultado1[2];
            $sql2 = "SELECT Permutas.Mat_soli, tbefetivopm.NOME, tbcargo.POSTO_GRAD FROM (tbefetivopm INNER JOIN Permutas ON tbefetivopm.MAT = Permutas.Mat_soli) INNER JOIN tbcargo ON tbefetivopm.CARGO = tbcargo.CARGOId WHERE (((Permutas.Mat_soli)='$mat'))";
            $qry2= mysql_query($sql2) or die ("nao foi possivel inserir os dados");
            $res6 = mysql_fetch_array($qry2);
            ?>
            <td><?php echo $res6[2]; ?></td>
            <td><?php echo $res6[1]; ?></td>
            <td><?php echo $resultado1[3]; ?></td>
            <?php $mat2 = $resultado1[3];
            $sql3 = "SELECT Permutas.Mat_Subs, tbefetivopm.NOME, tbcargo.POSTO_GRAD FROM (tbefetivopm INNER JOIN Permutas ON tbefetivopm.MAT = Permutas.Mat_Subs) INNER JOIN tbcargo ON tbefetivopm.CARGO = tbcargo.CARGOId WHERE (((Permutas.Mat_Subs)='$mat2'))";
            $qry3   = mysqli_query($con, $sql3) or die (mysqli_error($con));
            $res2   = mysqli_fetch_array($qry3);

            ?>
            <td><?php echo $res2[2]; ?></td>
            <td><?php echo $res2[1]; ?></td>
            <td><?php echo $resultado1[4]; ?></td>
            <td><a href="excluirPermutas.php?id=<? echo $resultado1[1] ?>&mat=<?php echo $resultado1[2]; ?>"><center><img src="_imagens/deletered%20cópia.png"></center></a></td>

        </tr>

   <? } ?>
    <?php } ?>
    <? mysqli_close($con)?>
</table>

</body>
</html>