<?php


include "teste.php";
date_default_timezone_set('Brazil/East');

//criaçao de tabela mysql
$data           = date('y-m-d');
//$acao = $_GET["acao"];
$diaAnterior    = gmdate("y-m-d",time()-(3600*27));
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
        <td id="cima">Posto de Serviço:</td>
        <td id="cima">Observação:</td>

        <td id="cima">Excluir</td>
        <td id="cima">Relatório</td>



    </tr>
<?php

//$sql ="SELECT * FROM `tbServ` WHERE `data` BETWEEN '$diaAnterior' AND '$data' " ;
$sql ="SELECT * FROM `Diversos` ORDER BY `id_Serv` DESC" ;
$qry = mysqli_query($con, $sql);
      
while($resultado = mysqli_fetch_array($qry)) { ?>
    <tr>

        <td><?php echo $resultado[0]; ?></td>
        <td><?php echo $resultado[2]; ?></td>

        <td><?php echo $resultado[3]; ?></td>


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