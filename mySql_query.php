<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Consulta de Ordens de Policiamento Ostensivo</title>

</head>
<body>
<div>
<img id="65" src="logo65">
<?php
/**
 mysql_query(query, connection)
 * INSERT INTO nome_tabela (campos) VALUES (valores)
 *
 */
   include "teste.php";
//criaçao de tabela mysql
 //$n = isset($_GET["NumOPO"])?$_GET["NumOPO"]:"Não foi possivel exibir";


  $sql = "SELECT * FROM `opo` ORDER BY cod";
  $qry = mysql_query($sql);
  while($res = mysql_fetch_array($qry)){
echo print_r($res);
}
?>
</div>
</body>
</html>

