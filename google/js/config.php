<?php

$server = 'localhost';
$user = 'root';
$password = 'root';
$db = '65cipm';
$host = 'localhost';
$port = 3306;

$link = mysql_connect(
    "$host:$port",
    $user,
    $password
);
$db_selected = mysql_select_db(
    $db,
    $link
);
//$conexao = mysql_connect($server, $usuario, $senha);

//$db = mysql_select_db(65cipm,$conexao);
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

?>

