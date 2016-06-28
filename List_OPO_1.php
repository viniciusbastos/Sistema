<?php
include "teste.php";
//criaçao de tabela mysql
$query2 = mysqli_query($con,"SELECT * FROM `BAIRROS`");
?>


<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <div class="form-group">
        <div class="col-md-4 col-md-offset-4">
            <h3 align="center">Listar Ordens de Policiamento Ostensivo</h3>
            <form method="post" action="index.php?link=5">
                <label>Digite a data Inicial:</label><input type="date" name="data2" class="form-group"></p>
                <p>Digite a data Final:<input type="date" name="data"></p>
                </br>
                <input type="submit" value="Consultar" class="btn btn-bitbucket"></fildset>
            </form>
               </div>
    </div>
            <? include "List_opo.php"; ?>
         
    </body>
</html>