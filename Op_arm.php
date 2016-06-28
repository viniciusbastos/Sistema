<?php


include "teste.php";
//criaçao de tabela mysql
$id         = $_POST["id"];
$acao       = $_POST["acao"];
$tipoarm    = $_POST["tipoarma"];
$calibre    = $_POST["calibre"];
$gu         = $_POST["gu"];
$marca      = $_POST["marca"];
$num        = $_POST["num"];



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


        $sql2 = "INSERT INTO `65cipm`.`arma` (`id_Serv`, `tipoarma`, `Numeração`, `Marca`, `calibre`, `guresp`) VALUES ($id, '$tipoarm','$num','$marca', '$calibre', '$gu')";
        mysql_query($sql2) or die (mysql_error($link));

    echo "Dados inseridos com sucesso!";
}
echo "<script type = 'text/JavaScript'> location.href ='index.php?link=12'</script> "
?>