

<?php
include "teste.php";

$id        = $_POST["id"];
$acao      = $_POST["acao"];
$nome      = $_POST["nome"];
$vulgo     = $_POST["vulgo"];
$rg        = $_POST["rg"];
$endereco  = $_POST["Endereco"];
$bairro    = $_POST["bairro"];
$data_nasc = $_POST["data_nasc"];
$registro  = $_POST["registro"];
$tipo      = $_POST["tipo"];
echo $nome;
echo $vulgo;
echo $rg;
echo $endereco;
echo $bairro;
echo $data_nasc;
echo $registro;
echo $acao;

if($acao == "alterar") {
    $sql = "UPDATE `tbdadosvitima` SET
    `Nome`='$nome',
    `Vulgo`='$vulgo',
    `RG`= '$rg',
    `Endereco`='$endereco',
    `Bairro`='$bairro',
    `Data_Nasc`= '$data_nasc',
    `Registro`='$registro' WHERE `id` = $id";
    $qry = mysql_query($sql) or die ("nao foi possivel alterar os dados");

}
if($acao == "excluir") {
    $sql = "DELETE FROM `tbdadosvitima` WHERE `id`= $id";
    $qry = mysql_query($sql) or die ("nao foi possivel inserir os dados");
}



if($acao == "Inserir") {
    $sql = "INSERT INTO `tbdadosvitima` (`id_Oco`,`Tipo`, `Nome`, `Vulgo`, `RG`, `Endereco`, `Bairro`, `Data_Nasc`, `Registro`) VALUES ('$id','$tipo', '$nome', '$vulgo', '$rg', '$endereco', '$bairro', '$data_nasc', '$registro');";
    $qry = mysql_query($sql) or die ("nao foi possivel inserir os dados");
    echo "x";

}

echo "<script type = 'text/JavaScript'> location.href ='index.php?link=12&id=$id'</script> "

?>