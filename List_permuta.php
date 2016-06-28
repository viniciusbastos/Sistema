<?php


include "teste.php";
//criaçao de tabela mysql
$data           = date('y-m-d');
//$acao         = $_GET["acao"];
$diaAnterior    =   gmdate("y-m-d",time()-(3600*27));
$id             = $_GET["id"];

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>

 <h2 id="center"> Relatórios de Serviço dos dias <?php echo date("d/m/Y", strtotime($diaAnterior))  ?> à <?php echo date("d/m/Y", strtotime($data)) ?></h2>
    
<table id="relat">
    <tr>
        <td id="cima">DATA</td>
        <td id="cima">Matrícula-SUBSTITUÏDO</td>
        <td id="cima">Posto/Grad</td>
        <td id="cima">Nome</td>
        <td id="cima">Matrícula-SUBSTITUTO</td>
        <td id="cima">Posto/Grad</td>
        <td id="cima">Nome</td>
        <td id="cima">Posto de Serviço</td>


        <td id="cima">Excluir</td>
        <td id="cima">Relatório</td>



    </tr>
<?php

//$sql ="SELECT * FROM `tbServ` WHERE `data` BETWEEN '$diaAnterior' AND '$data' " ;
$sql ="SELECT * FROM `Permutas` ORDER BY `id_Serv` DESC" ;
$qry = mysqli_query($con,$sql);
      
while($resultado = mysqli_fetch_array($qry)) { ?>
    <tr>

        <td><?php echo $resultado[0]; ?></td>
        <td><?php echo $resultado[2]; ?></td>
        <?php $mat = $resultado[2];
        $sql2 = "SELECT Permutas.Mat_soli, tbefetivopm.NOME, tbcargo.POSTO_GRAD FROM (tbefetivopm INNER JOIN Permutas ON tbefetivopm.MAT = Permutas.Mat_soli) INNER JOIN tbcargo ON tbefetivopm.CARGO = tbcargo.CARGOId WHERE (((Permutas.Mat_soli)='$mat'))";
        $qry2= mysqli_query($con,$sql2) or die ("nao foi possivel inserir os dados");
        $res = mysqli_fetch_array($qry2);
        ?>
        <td><?php echo $res[2]; ?></td>
        <td><?php echo $res[1]; ?></td>
        <td><?php echo $resultado[3]; ?></td>
        <?php $mat2 = $resultado[3];
        $sql3 = "SELECT Permutas.Mat_Subs, tbefetivopm.NOME, tbcargo.POSTO_GRAD FROM (tbefetivopm INNER JOIN Permutas ON tbefetivopm.MAT = Permutas.Mat_Subs) INNER JOIN tbcargo ON tbefetivopm.CARGO = tbcargo.CARGOId WHERE (((Permutas.Mat_Subs)='$mat2'))";
        $qry3= mysqli_query($con,$sql3) or die ("nao foi possivel inserir os dados");
        $res2 = mysqli_fetch_array($qry3);
        ?>
        <td><?php echo $res2[2]; ?></td>
        <td><?php echo $res2[1]; ?></td>
        <td><?php echo $resultado[4]; ?></td>
        <td><a href="bootstrap/index.php?link=18&acao=Inserir&id=<?php echo $resultado[0]; ?>"><center><img src="_imagens/pencil256.png"></center></a></td>
        <td><a href="http://localhost:8888/sistema/index.php?link=12&id=<?php echo $resultado[0]; ?>"><center><img src="_imagens/lista.png"></center></a></td>



        <td><a href="Op_ServExcluir.php?acao=Excluir&id=<?php echo $resultado[0]; ?>"><center><img src="_imagens/deletered%20cópia.png"></center></a></td>
        <td><a href="http://localhost:8888/sistema/relatorio.php?id=<?php echo $resultado[0]; ?>"><center><img src="_imagens/Reports.png"></center></a></td>

    </tr>


<?php } ?>
</table>
   <? if($id != ""){
       include"list_oco2.php";
}
?>

</html>