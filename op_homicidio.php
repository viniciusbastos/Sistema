

<?php
include "teste.php";
$id = $_GET["id"];

$nome = $_POST["name"];
$vulgo = $_POST["vulgo"];
$rg = $_POST["rg"];
$endereco = $_POST["Endereco"];
$bairro = $_POST["bairro"];
$data_nasc = $_POST["data_nasc"];
$registro = $_POST["registro"];
echo $nome;
echo $vulgo;
echo $rg;
echo $endereco;
echo $bairro;
echo $data_nasc;
echo $registro;



$sql = "INSERT INTO `tbdadosvitima` (`id`, `Nome`, `Vulgo`, `RG`, `Endereco`, `Bairro`, `Data_Nasc`, `Registro`) VALUES ('$id', '$name', '$vulgo', '$rg', '$endereco', '$bairro', '$data_nasc', '$registro');";
$qry = mysql_query($sql) or die ("nao foi possivel inserir os dados");

echo "<script type = 'text/JavaScript'> location.href ='http://localhost:8888/sistema/index.php?link=2&acao=Inserir&id=0&form=homicidio'</script> "

?>