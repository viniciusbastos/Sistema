<?php


include "teste.php";
//criaçao de tabela mysql
$id = $_POST["id"];
$acao = $_POST["acao"];


if($acao == "Excluir") {

    $sql = "DELETE FROM `tbServ` WHERE `id` = $id ";
    mysqli_query($con, $sql) or die (mysqli_error($con));
    $_SESSION["success"] = "Relatório excluído com sucesso";
    header("Location: List_serv.php?removido=true");
    die();
}



?>
