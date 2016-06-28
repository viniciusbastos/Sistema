<?php
include "teste.php";
//criaçao de tabela mysql
$query2 = mysqli_query($con,"SELECT * FROM `BAIRROS`");
$query3 = mysqli_query($con,"SELECT * FROM `tipo de ocorrencias`");
?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

    <form  method="post">
        <h2 align="center">Estatística por Período</h2>
        <legend></legend>
        <fieldset> <legend>Data</legend>
            Inicial: <input type="date" name="data" ">
            Final: <input type="date" name="data2" ">
        </fieldset>
        <fieldset><legend>Horário</legend>
            Inicial: <input type="time" name="hr_ini">
            Final: <input type="time" name="hr_fim">

        </fieldset>
        <fieldset>
            <legend>Bairro e Tipo</legend>

            Bairro: <select style=width:200px name="bairro"></br>
                <?php while($prod2 = mysqli_fetch_array($query2)) { ?>
                    <option> <?php echo $prod2[0]; ?></option>
                <?php } ?>

            </select>
            <br>
            <br>
            Tipo:   <select style=width:230px name="tipo" > </br>
                <?php while($prod = mysqli_fetch_array($query3)) { ?>
                    <option> <?php echo $prod[0]; ?></option>
                <?php } ?>
            </select>
            <input type="submit" value="CONSULTAR" class="btn">
        </fieldset>


        <p>


        </p>

    </form>
<?php include "List_oco.php"; ?>
</body>
</html>