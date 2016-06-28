<?php

include "teste.php";


$data        = $_POST["data"];
$posto       = $_POST["posto"];
$alimentacao = $_POST["alimentacao"];
$area        = $_POST["area"];
$peo         = $_POST["peo"];
$qualidade   = $_POST["qualidade"];
$horario     = $_POST["horario"];
$Limpeza     = $_POST["Limpeza"];

echo $data;
echo $posto;
echo $alimentacao;
echo $area;

    $sql = "INSERT INTO `pesquisa`( `data`,`posto`, `Alimentacao`, `AreaAlimentacao`, `PEO`, `Transporte`, `CumprimentoDoHorario`, `LimpeaSanitario`) VALUES ('$data','$posto','$alimentacao', '$area','$peo','$qualidade','$horario','$Limpeza')";

    mysql_query($sql) or die (mysql_error()) ;

echo "<script type = 'text/JavaScript'> location.href ='http://192.168.1.158:8888/sistema/pesquisa.php'</script> ";