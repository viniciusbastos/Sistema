<?php


include "teste.php";
//criaçao de tabela mysql
$id = $_POST["id"];
$acao = $_POST["acao"];

$servico = $_POST["serv"] ;
$tipo = $_POST["tipo"];
$bairro = $_POST["bairro"];
$resumo = $_POST["resumo"];
$data = $_POST["data"];
$horario = $_POST["hr"];
$local = $_POST["local"];
$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];

echo $servico;
echo $tipo;
echo $id;
echo $acao;
echo $resumo;
echo $longitude;
echo $latitude;

if($acao == "Consultar") {

    $sql = "SELECT * FROM `ocorrencias`  ";
    $qry = mysql_query($sql) or die ("nao foi possivel inserir os dados");
    $res= mysql_fetch_array($qry);
    print_r($res);
}
//alterar dados
if($acao == "Alterar") {

    $sql = "UPDATE  `ocorrencias` set
    Servico = '$servico',
    Tipo = '$tipo',
    Bairro = '$bairro',
    Resumo = '$resumo',
    horario = '$horario',
    Data = '$data',
    Local = '$local'
    Latitude = `$latitude`,
    Longitude =`$longitude`
    WHERE id = '$id'  ";
mysql_query($sql) or die ("nao foi possivel inserir os dados");
}
if($acao == "Excluir") {

    $sql = "DELETE from  `ocorrencias`  WHERE id = $id";
    mysql_query($sql) or die ("nao foi possivel deletar os dados");
}


if($acao == "Inserir") {

    $sql = "INSERT INTO `ocorrencias`( `id_Serv`, `Tipo`, `Bairro`, `Resumo`,`Data`, `horario`, `Local`,`Latitude`, `Longitude`) VALUES ($servico ,'$tipo', '$bairro','$resumo','$data', '$horario', '$local','$latitude', '$longitude')";
    mysql_query($sql) or die ("nao foi possivel inserir os dados");
    echo "Dados inseridos com sucesso!";
}
echo "<script type = 'text/JavaScript'> location.href ='list_serv.php'</script> "
?>