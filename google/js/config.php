<?php

$username = 'root';
$password = '';
$database=  '65cipm';



$server = 'localhost';
$usuario = 'root';
$senha = '';

$connection = mysql_connect($server, $usuario, $senha);

$db_selected = mysql_select_db('65cipm',$connection);
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
?>

