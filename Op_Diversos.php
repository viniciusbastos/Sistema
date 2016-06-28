<?php


include "teste.php";
//criaçao de tabela mysql

$tipo = $_POST["tipo"];

$Posto_serv = $_POST["Posto_serv"];
$obs = $_POST["obs"];
$idServ = $_POST["id"];
$acao =$_POST["acao"];

echo $tipo;
echo $servico;
echo $Mat_escalado;
echo $Mat_subs;
echo $obs. "<br>";
echo $idServ;
echo $acao;

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

    $sql = "INSERT INTO `Diversos`(`id_Serv`, `Posto_Ser`, `Obs:`) VALUES ('$idServ' ,'$Posto_serv', '$obs')";
    mysql_query($sql) or die ("nao foi possivel inserir os dados");
    echo "Dados inseridos com sucesso!";
}

echo "<script type = 'text/JavaScript'> location.href ='index.php?link=12'</script> "
?>