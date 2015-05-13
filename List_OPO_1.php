<?php
include "teste.php";
//criaçao de tabela mysql
$query2 = mysql_query("SELECT * FROM `BAIRROS`");
?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h3>Listar Ordens de Policiamento Ostensivo</h3>
<form method="post" action="index.php?link=6">
    <p>Digite a data Inicial:<input type="date" name="data2"></p>
    <p>Digite a data Final:<input type="date" name="data"></p>
    <select style=width:200px name="bairro" value="<?php echo $bairro ?>"></br>
            <?php while($prod2 = mysql_fetch_array($query2)) { ?>
                <option> <?php echo $prod2[0]; ?></option>
            <?php } ?>
        </select></br>
<input type="submit" value="Consultar">

</form>
</body>
</html>