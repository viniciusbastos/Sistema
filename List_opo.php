<?php


include "teste.php";
//criaçao de tabela mysql
//$data = date('y-m-d');
//$acao = $_GET["acao"];
//$diaAnterior = gmdate("y-m-d",time()-(3600*27));
$data = $_POST["data"];
$diaAnterior = $_POST["data2"];
$bairro = $_POST["bairro"];       
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
        <td id="cima">Nome</td>
        <td id="cima">Local</td>
        <td id="cima">Bairro</td>
        <td id="cima">Data</td>
        <td id="cima">Horario de Inicio</td>
        <td id="cima">Horario de termino</td>
        <td id="cima">Viatura</td>

        </tr>
<?php
$sql ="SELECT * FROM `opo`\n". "WHERE (((Data) Between \"$diaAnterior\" And \"$data\") AND ((Bairro)=\"$bairro\"))" ;
$qry = mysql_query($sql);
while($resultado = mysql_fetch_array($qry)) { ?>
    <tr>

        <td><?php echo $resultado[0]; ?></td>
        <td><?php echo $resultado[2]; ?></td>
        <td><?php echo $resultado[3]; ?></td>
        <td><?php echo date("d/m/Y", strtotime($resultado[5])); ?></td>
        <td><?php echo $resultado[6]; ?></td>
        <td><?php echo $resultado[7]; ?></td>
        <td><?php echo $resultado[13]; ?></td>

    </tr>


<?php } ?>


</html>