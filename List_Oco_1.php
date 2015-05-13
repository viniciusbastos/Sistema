<?php
include "teste.php";
//criaçao de tabela mysql
$query2 = mysql_query("SELECT * FROM `BAIRROS`");
$query = mysql_query("SELECT * FROM `tipo de ocorrencias`");
?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h3>Listar Ordens de Policiamento Ostensivo</h3>
<form method="post" action="index.php?link=1">
    <p>Digite a data Inicial:<input type="date" name="data2"></p>
    <p>Digite a data Final:<input type="date" name="data"></p>
    <p> tipo <select style=width:200px name="tipo" value="<?php echo $tipo ?>"></br>
            <?php while($prod = mysql_fetch_array($query)) { ?>
                <option> <?php echo $prod[0]; ?></option>
            <?php } ?>
        </select></br</p>
        </select></br>
<input type="submit" value="Consultar">

</form>
</body>
</html>