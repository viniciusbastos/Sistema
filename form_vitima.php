<?php

include "teste.php" ;

$id   = $_GET["id"];
$acao = $_GET["acao"];
//$sql = "SELECT * FROM `tbdadosvitima` WHERE `id`= $id";
//$qry = mysql_query($sql);
//$row = mysql_fetch_array($qry) or die ("Nao foi possível");
//criaçao de tabela mysql
$query2 = mysqli_query($con,"SELECT * FROM `BAIRROS` ORDER BY `BAIRROS`.`Campo1` ASC");
?>
<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/html">
<head>
        <meta charset="UTF-8">
        <title>65 CIPM</title>

</head>
<style>
    .sele {
        background: rgba(126, 158, 204, 0.60);
        width: 268px;
        color: #4a6bb1;
        padding: 2px;
        font-size: 12px;
        line-height: 1;
        border: 0;
        border-radius: 0;
        height: 34px;
        -webkit-appearance: none;
    }
     input,
     select,
     textarea {
        padding: 0.2em;
        border: 1px solid #CCC;
        box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
        display: block;
    }
    input{
        width: 200px;
    }
</style>

<body>
<form method="post" action="op_vitima.php">
    <fieldset><legend>Dados da Vítima</legend>
        Nome:<br><input type="text" name="nome" value="<? echo $row['Nome']?>"><br>
        Tipo:<br> <select name="tipo">
                  <option>Vítima</option>
                  <option>Acusado</option>
                  </select><br>
        Idade:<br> <input type="number" name="idade" value="<? echo $row['Idade'] ?>"><br>

        Vulgo:<br> <input type="text" name="vulgo" value="<? echo $row['Vulgo']?>"><br>

        Rg:<br><input type="text" name="rg" value="<? echo $row[4]?>"><br>

        Endereço <br><input type="text" name="Endereco" value="<? echo $row['Endereco']?>"><br>

        Bairro:<br> <select  style=width:200px name="bairro" value="<?php echo $bairro ?>"></br>
            <?php while ($prod2 = mysqli_fetch_array($query2)) { ?>
                <option> <?php echo $prod2[0]; ?></option>
            <?php } ?>
        </select><br>

        Data Nascimento:<br> <input type="date" name="data_nasc" value="<? echo $row[7]?>" ><br><br>
        Informações Diversas:<br>
        <textarea name="registro" rows="6" cols="110"><?php echo $row[8] ?></textarea></br>

        <br>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="hidden" name="acao" value="<?php echo $acao ?>">

        <input type="submit" value="<?php echo $acao; ?>" class="btn">
    </fieldset>
</form>



</body>
</html>




