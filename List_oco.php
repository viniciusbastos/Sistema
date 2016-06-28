
\<?php


include "teste.php";
//criaçao de tabela mysql
//$data = date('y-m-d');
//$acao = $_GET["acao"];
//$diaAnterior = gmdate("y-m-d",time()-(3600*27));

$data   = $_POST["data"];
$data2  = $_POST["data2"];
$tipo   = $_POST["tipo"];
$hrini  = $_POST["hr_ini"];
$hrfim  = $_POST["hr_fim"];
$bairro = $_POST["bairro"];

if($bairro == "TODOS"){
    $bairro = "%";

}
if($tipo == "TODOS"){
    $tipo = "%";

}

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Relatório Of. Coordenador</title>
</head>
<body>
<table  id="relat" border="1">
    <tr>
        <td id="cima">Tipo</td>
        <td id="cima">Bairro</td>
        <td id="cima">Resumo</td>
        <td id="cima">Data</td>

        </tr>
        
            <?php
            $sql = "SELECT * FROM `ocorrencias` WHERE `Tipo` LIKE '$tipo' AND `Bairro` LIKE '$bairro' AND `Data` BETWEEN '$data' AND '$data2' AND `horario` BETWEEN '$hrini' AND '$hrfim'";
            $qry = mysqli_query($con,$sql);
            while($resultado = mysqli_fetch_array($qry)) {
                ?>
        <tr>
        <td><?php echo $resultado[2]; ?></td>
        <td><?php echo $resultado[4]; ?></td>
        <td><?php echo $resultado[5]; ?></td>
        <td><?php echo date("d/m/Y", strtotime($resultado[6])); ?></td>


         </tr>


            <?php } ?> 
</table>
</body>
</html>