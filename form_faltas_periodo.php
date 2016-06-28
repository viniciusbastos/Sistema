<?php


include "teste.php";
//criaçao de tabela mysql
//$id     = $_GET["id"];
$acao   = "Inserir";



$query  = mysqli_query($con,"SELECT * FROM `tipo de ocorrencias` ORDER BY `tipo de ocorrencias`.`Servico` ASC");
$query2 = mysqli_query($con,"SELECT `Viaturas` FROM `viaturas`");
$query3 = mysqli_query($con,"SELECT * FROM `BAIRROS` ORDER BY `Campo1` ASC");



?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Faltas no Período de Datas</title>
</head>
<body>
        <form  method="post">
            <h2 align="center">Faltas po Período de datas</h2>
            <legend></legend>
                Inicial:    <input type="date" name="data" ">
                Final:      <input type="date" name="data2" ">
        
                            <input type="submit" value="CONSULTAR" class="btn btn-microsoft">
            </p>
        
        </form>
<br>
<!--Lista faltas no período de datas especificados pelo formulario -->
<?php include "List_faltas_Periodo.php"; ?>
</body>
</html>

