<?php


include "teste.php";
//criaçao de tabela mysql
$id = $_GET["id"];
$acao = "Inserir";

$sql        = "SELECT * FROM `Servico`";
$qry        = mysqli_query($con,$sql);
$resultado  = mysqli_fetch_array($qry);


$query  = mysqli_query($con,"SELECT * FROM `tipo de ocorrencias` ORDER BY `tipo de ocorrencias`.`Servico` ASC");
$query2 = mysqli_query($con,"SELECT `Viaturas` FROM `viaturas`");
$query3 = mysqli_query($con,"SELECT * FROM `BAIRROS` ORDER BY `Campo1` ASC");


$data   = $resultado[1];
$turno  = $resultado[2];


?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Relatório Of. Coordenador</title>
</head>
<body>
<form  method="post">
    <h2>Estatística por Período</h2>
    <fieldset><legend></legend>
    <fieldset> <legend>Data</legend></br></br>
        Inicial: <input type="date" name="data" ">
        Final: <input type="date" name="data2" ">
    </fieldset>
    <fieldset><legend>Horário</legend>
        Inicial: <input type="time" name="hr_ini">
        Final: <input type="time" name="hr_fim">

    </fieldset>
        <fieldset>
            <legend>Bairro</legend>

            Bairro: <select style=width:200px name="bairro"></br>
                <?php while($prod2 = mysqli_fetch_array($query3)) { ?>
                    <option> <?php echo $prod2[0]; ?></option>
                <?php } ?>

            </select>
        </fieldset>

        Tipo: <select style=width:230px name="tipo" > </br>
        <?php while($prod = mysqli_fetch_array($query)) { ?>
            <option> <?php echo $prod[0]; ?></option>
        <?php } ?>

        <p>
         </select>
        <input type="submit" value="CONSULTAR">
    </p>
    </fieldset>
</form>
<?php include "Op_estatistica2.php"; ?>
</body>
</html>

