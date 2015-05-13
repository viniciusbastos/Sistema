<?php


$server = 'localhost';
$usuario = 'root';
$senha = '';

$conexao = mysql_connect($server, $usuario, $senha);

$db = mysql_select_db('65cipm',$conexao);
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

?>