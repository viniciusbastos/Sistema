<html>
<head>
    <meta charset="utf-8" />
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="./_css/specs.css" type="text/css" />
    <style type="text/css">
        a{
            display: block;
            background-color: #5274c2;
            color: #ffffff;
            width: 40px;
            padding: 3px;
            text-decoration: blink;
        }
    </style>
</head>
<body>
<h2>Quantidade de Ocorrencias por Período</h2>

<?php include('formulario.php'); ?>

<?php if ($exibir_tabela) : ?>
    <?php include('tabela.php'); ?>
<?php endif; ?>
<table id="opo" border="1">
    <tr>
    <th>Tipo do Fato</th>
    <th>Qtd</th>
    <tr>
<?php

include "teste.php";
$data = $_POST["data"];
$data2 = $_POST["data2"];
$tipo = $_POST["tipo"];
$hrini =$_POST["hr_ini"];
$hrfim =$_POST["hr_fim"];
$bairro =$_POST["bairro"];
echo $bairro;
if($bairro == "TODOS"){
    $bairro = "%";
    echo $bairro;
}



$sql = "SELECT `tipo`, COUNT(`tipo`), `Latitude`,`Longitude` FROM `ocorrencias` WHERE `Tipo` LIKE '$tipo' AND `Bairro` LIKE '$bairro' AND `Data` BETWEEN '$data' AND '$data2' AND `horario` BETWEEN '$hrini' AND '$hrfim' GROUP BY `tipo` ";
$qry = mysql_query($sql) or die ("nao foi possivel inserir os dados");
?>
 <?php while($res = mysql_fetch_array($qry))  { ?>

        <tr>
        <td><?php echo $res[0]; ?> </td>
        <td> <?php echo $res[1]; ?>   </td>

        </tr>
        <?php } ?>

<a href="form_estatistica.php">Voltar</a>
