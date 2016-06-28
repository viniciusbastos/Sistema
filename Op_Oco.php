<?php


include "teste.php";
//criaçao de tabela mysql
$id           = $_POST["id"];
$acao         = $_POST["acao"];
$form         = $_POST["form"];
$servico      = $_POST["serv"] ;
$tipo         = $_POST["tipo"];
$bairro       = $_POST["bairro"];
$resumo       = $_POST["resumo"];
$data         = $_POST["data"];
$horario      = $_POST["hr"];
$local        = $_POST["local"];
$latitude     = $_POST["latitude"];
$longitude    = $_POST["longitude"];
$tipoarm      = $_POST["tipoarma"];
$calibre      = $_POST["calibre"];
$gu           = $_POST["gu"];
$num          = $_POST["num"];
$marca        = $_POST["marca"];
$iluminacao   = $_POST["iluminacao"];
$pavimentacao = $_POST["pavimentacao"];
$iniciativa   = $_POST["iniciativa"];


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

    $sql = "INSERT INTO `ocorrencias`( `id_Serv`, `Tipo`, `Bairro`, `Resumo`,`Data`, `horario`, `Local`,`Iniciativa`, `Iluminacao`, `Pavimentacao`,`Latitude`, `Longitude`) VALUES ($servico ,'$tipo', '$bairro','$resumo','$data', '$horario', '$local','$iniciativa','$iluminacao','$pavimentacao','$latitude', '$longitude')";
    mysql_query($sql) or die (mysql_error($link));
    echo "Dados inseridos com sucesso!";
}
if($form == "arma") {
    $sql2 = "INSERT INTO `65cipm`.`arma` ( `ident`, `tipoarma`, `Numeração`, `Marca`, `calibre`, `guresp`) VALUES ($ident, '$tipoarm','$num','$marca', '$calibre', '$gu')";
    mysql_query($sql2) or die ("nao foi possivel inserir na tabela armas os dados");
}



echo "<script type = 'text/JavaScript'> location.href ='http://localhost:8888/sistema/index.php?link=12'</script> "
?>