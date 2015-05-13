<?php


include "teste.php";
//criaçao de tabela mysql
$id = $_POST["id"];
$acao = $_POST["acao"];
$cmt = $_POST["cmt"];
$gu = $_POST["gu"];
$acao = $_POST["Inserir"];
$data = $_POST["data"];
$turno = $_POST["turno"];



echo $data;
echo $id;
echo $acao;
echo $turno;
echo $gu;
echo $cmt;

if($acao == "Consultar") {

    $sql = "SELECT * FROM `ocorrencias`  ";
    $qry = mysql_query($sql) or die ("nao foi possivel inserir os dados");
    $res= mysql_fetch_array($qry);
    print_r($res);
}
//alterar dados
if($acao == "Alterar") {

    $sql = "UPDATE  `Servico` set
    data = '$data',
    turno = '$turno',
    WHERE Cod_Serv = '$id'  ";
mysql_query($sql) or die ("nao foi possivel inserir os dados");
}
if($acao == "Excluir") {

    $sql = "DELETE from  `Servico`  WHERE Cod_Serv = $id";
    mysql_query($sql) or die ("nao foi possivel deletar os dados");
}


if($acao == "Inserir") {

    $sql = "INSERT INTO `tbServ`( `data`, `turno`, `gu_empre`, `mat_cmt`) VALUES('$data', '$turno', '$gu', '$cmt')";
    mysql_query($sql) or die ("nao foi possivel inserir os dados do  if");
    echo "Dados inseridos com sucesso!";
}
$sql2 = "SELECT `id` FROM `tbServ` WHERE data = '$data' AND turno ='$turno' AND gu_empre = '$gu' ";
$qry = mysql_query($sql2) or die ("nao foi possivel inserir os dados");
$res= mysql_fetch_array($qry);
print_r($res);

echo "<script type = 'text/JavaScript'> location.href ='index.php?link=2&acao=Inserir&id=$res[0]'</script> "

?>
