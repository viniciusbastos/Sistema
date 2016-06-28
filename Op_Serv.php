<?php
include "teste.php";
include "logica-usuario.php";

verificaUsuario();

//criaçao de tabela mysql
$id    = $_POST["id"];
$acao  = $_POST["acao"];
$cmt   = $_POST["cmt"];
$gu    = $_POST["gu"];
$data  = $_POST["data"];
$turno = $_POST["turno"];


$cmt = mysqli_real_escape_string($con, $cmt);


if($acao == "Consultar") {

    $sql = "SELECT * FROM `ocorrencias`  ";
    $qry = mysqli_query($con, $sql) or die ("nao foi possivel inserir os dados");
    $res= mysqli_fetch_array($qry);
    print_r($res);
}
//alterar dados
if($acao == "Alterar") {

    $sql = "UPDATE  `Servico` set
    data = '$data',
    turno = '$turno',
    WHERE Cod_Serv = '$id'  ";
    mysqli_query($con, $sql) or die ("nao foi possivel inserir os dados");
}
if($acao == "Excluir") {

    $sql = "DELETE from  `tbServ`  WHERE 'id' = $id";
    mysqli_query($con, $sql) or die (mysqli_error($con));

}


if($acao == "Inserir") {

    $sql = "INSERT INTO `tbServ`( `data`, `turno`, `gu_empre`, `mat_cmt`) VALUES('$data', '$turno', '$gu', '$cmt')";
    mysqli_query($con, $sql) or die (mysqli_error($con));
    var_dump($sql);
    //header("Location: List_serv.php");

    die();

}

?>
