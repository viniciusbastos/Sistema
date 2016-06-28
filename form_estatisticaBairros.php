<?php


include "teste.php";
//criaçao de tabela mysql
$id     = $_GET["id"];
$acao   = $_POST["acao"];

$sql = "SELECT * FROM `Servico`";
$qry = mysqli_query($con,$sql);
//$resul = mysqli_fetch_array($qry);
//$data = $resul[1];
//$turno = $resul[2];

$query = mysqli_query($con, "SELECT * FROM `tipo de ocorrencias` ORDER BY `tipo de ocorrencias`.`Servico` ASC");
$query2 = mysqli_query($con,"SELECT `Viaturas` FROM `viaturas`");



?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Relatório Of. Coordenador</title>
</head>
<link rel="stylesheet" type="text/css" href="_css/estatistica.css"/>
<body>

        <h2 align="center" id="titulo2">Estatística por Período</h2>
        <div id="form">

            <form  method="post" id="for">
            <fieldset>
                Data Inicial: <input type="date" name="data" >
                Data Final: <input type="date" name="data2">
            </fieldset>
            <fieldset>
                <legend>Horário</legend>
                Inicial: <input type="time" name="hr_ini" value="00:00">
                Final: <input type="time" name="hr_fim" value="23:59">

            </fieldset>
            <fieldset id="esquerda">

                <div id="esquerda"><br>
            Tipo:   <select  name="tipo" > </br>
                <?php while($prod = mysqli_fetch_array($query)) { ?>
                    <option> <?php echo $prod[0]; ?></option>
                <?php } ?>
                    </select>
                    <input type="submit" value="CONSULTAR" class="btnC">
                    <input type="hidden" name="acao" value="pesquisar">
                </div>
            </fieldset>


</form>
</div>
        <?php
        if ($acao == "pesquisar"){

         //include "Op_estatistica.php";
         //include "mapaComGraf.php";
            include "GraficoestatisticaBairro.php";
        }
        ?>
</body>
</html>

