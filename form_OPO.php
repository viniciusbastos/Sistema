<?php


include "teste.php";
//criaçao de tabela mysql
//$id = $_GET["id"];
//$acao = $_GET["acao"];


$nome = isset($_POST["Nome"])?$_POST["Nome"]:"Não foi possivel exibir";
echo $nome;
$local = isset($_POST["Local"])?$_POST["Local"]:"Não foi possivel exibir";
//echo $local;
$bairro = isset($_POST["bairro"])?$_POST["bairro"]:"Não foi possivel exibir";
//echo $bairro;
$Solicitante = isset($_POST["Solicitante"])?$_POST["Solicitante"]:"Não foi possivel exibir";
//echo $Solicitante;
$data = isset($_POST["data"])?$_POST["data"]:"Não foi possivel exibir";
//echo $data."</br>";
$hrini = isset($_POST["hr_inicial"])?$_POST["hr_inicial"]:"Não foi possivel exibir";
//echo $hrini."</br>";
$hrfim = isset($_POST["hr_termino"])?$_POST["hr_termino"]:"Não foi possivel exibir";
//echo $hrfim."</br>";
$uni = isset($_POST["uni"])?$_POST["uni"]:"Não foi possivel exibir";
//echo $uni."</br>";
$arm = isset($_POST["arm"])?$_POST["arm"]:"Não foi possivel exibir";
//echo $arm;
$modalidade = isset($_POST["modalidade"])?$_POST["modalidade"]:"Não foi possivel exibir";
//echo $modalidade;
$processo = isset($_POST["processo"])?$_POST["processo"]:"Não foi possivel exibir";
$otresclarecimentos = isset($_POST["OtrEsclarecimentos"])?$_POST["OtrEsclarecimentos"]:"Não foi possivel exibir";
//echo $otresclarecimentos;
$vtr = isset($_POST["vtr"])?$_POST["vtr"]:"Não foi possivel exibir";
//echo $vtr;
$sql = "INSERT INTO `opo`(`Nome`, `Local`, `Bairro`, `Solicitante`, `Data`, `Hr_Inicio`, `Hr_Termino`, `Uniforme`, `Armamento`, `Modalidade`, `Processo`, `Outros_Esclarecimentos`, `Vtr`) VALUES ('$nome','$local','$bairro','$Solicitante','$data','$hrini','$hrfim','$uni', '$arm','$modalidade','$processo','$otresclarecimentos','$vtr')  ";
$res = mysql_query($sql);
echo "Daddos inseridos com sucesso";
//$res = mysql_fetch_array($qry);

?>

</div>
</body>
</html>