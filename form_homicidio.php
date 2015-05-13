<?php include "teste.php" ?>
<?php

$id = $_GET["id"];
//criaçao de tabela mysql
$query2 = mysql_query("SELECT * FROM `BAIRROS` ORDER BY `Campo1` ASC");
?>
    <!DOCTYPE html>
    <html lang="pt-br" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <title>65 CIPM</title>

    </head>


<body>
      <form method="post" action="op_homicidio.php">
          <fieldset><legend>Dados Homicídio</legend>
              Nome:<input type="text" name="name">
              Idade: <input type="number" name="idade">
              Vulgo: <input type="text" name="vulgo">
              Rg:<input type="text" name="rg">
              Endereço <input type="text" name="Endereco">
              Bairro: <select style=width:200px name="bairro" value="<?php echo $bairro ?>"></br>
                  <?php while($prod2 = mysql_fetch_array($query2)) { ?>
                      <option> <?php echo $prod2[0]; ?></option>
                  <?php } ?>
                        </select>
              Data Nascimento: <input type="date" name="data_nasc">
              <textarea name="registro"></textarea>

            <input type="submit" value="Inserir">
          </fieldset>



      </form>




</body>
</html>




