<?php


include "teste.php";
//criaçao de tabela mysql
//$data = date('y-m-d');
//$acao = $_GET["acao"];
//$diaAnterior = gmdate("y-m-d",time()-(3600*27));
$data = $_POST["data2"];
$data1 = $_POST["data"];
$tipo =$_POST["tipo"];
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Relatório Of. Coordenador</title>
</head>
<body>
<table  id="oco" border="1">
    <tr>
        <td id="cima">Tipo</td>
        <td id="cima">Bairro</td>
        <td id="cima">Resumo</td>
        <td id="cima">Data</td>
        <td id="cima" colspan="2" align="center">Opçao</td>
        </tr>
        
<?php
$sql = "SELECT * FROM `ocorrencias` WHERE `Tipo` LIKE '$tipo' AND `Data` BETWEEN '$data' AND '$data1' ";
$qry = mysql_query($sql);
while($resultado = mysql_fetch_array($qry)) { ?>
        <tr>
        <td><?php echo $resultado[2]; ?></td>
        <td><?php echo $resultado[3]; ?></td>
        <td><?php echo $resultado[4]; ?></td>
        <td><?php echo $resultado[5]; ?></td>

        <td><a href="index.php?link=2&acao=Alterar&id=<?php echo $resultado[0] ; ?>" > Alterar</a></td>
        <td><a href="index.php?link=2&acao=Excluir&id=<?php echo $resultado[0] ; ?>" > Excluir</a></td>

         </tr>


            <?php } ?> 
</table>
</body>
</html>