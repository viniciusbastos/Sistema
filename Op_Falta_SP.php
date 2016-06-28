<?php


include "teste.php";


$Mat        = $_POST["Mat"] ;

$Posto_serv = $_POST["Posto_serv"];

$data       = $_POST["data_inicial"];

$data2      = $_POST["data_final"];



$datetime1  = date_create($data);
$datetime2  = date_create($data2);
$interval   = date_diff($datetime1, $datetime2);
$intervalo  = $interval->format('%d');

echo $intervalo;



    $sql = "INSERT INTO `Faltas_SP`( `Mat`, `Posto_Serv`, `Data_Inicial`, `Data_Final`, `Qtd_dias`) VALUES ('$Mat', '$Posto_serv','$data', '$data2', '$intervalo')";
    mysqli_query($con, $sql) or die (mysqli_error($con));
    echo "Dados inseridos com sucesso!";


echo "<script type = 'text/JavaScript'> location.href ='index.php?link=12'</script> "


?>