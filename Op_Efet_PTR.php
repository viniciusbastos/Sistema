<?php


include "teste.php";
//criaçao de tabela mysql
$id     = $_POST["id"];
$acao   = $_POST["acao"];


$Mat        = $_POST["Mat"];
$funcao     = $_POST["funcao"];
$nPtr       = $_POST["nPTR"];

if($acao == "Inserir") {
    $sql = "INSERT INTO `Efet_Ptr`( `id_OPO`, `n_ptr`, `Mat`, `Func`) VALUES ( '$id','$nPtr','$Mat', '$funcao')";
    mysql_query($sql) or die (mysql_error($link));
    echo "Dados inseridos com sucesso!";
    echo "<script type = 'text/JavaScript'> location.href ='http://localhost:8888/sistema/form_efet_PTR.php?id=$id&nptr=$nPtr'</script>;";

}
if($acao == "InserirPTR") {
    $sql = "INSERT INTO `Opo_ptr`(`n_PTR`, `id_OPO`) VALUES ('$nPtr','$id')";
    mysql_query($sql) or die (mysql_error($link));
    echo "Dados inseridos com sucesso!";
    echo "<script type = 'text/JavaScript'> location.href ='http://localhost:8888/sistema/form_efet_PTR.php?id=$id&nptr=$nPtr'</script>;";

}




//echo "<script type = 'text/JavaScript'> location.href ='http://localhost:8888/sistema/index.php?link=21&id= $id'</script>; "
?>