<?php

// conexão e seleção do banco de dados

//$res = mysqli_query($con, $sql);
$server = 'mysql.hostinger.com.br';
$user = 'u552607284_65';
$password = '376563';
$db = 'u552607284_65c';



$con = mysqli_connect($server, $user, $password, $db);

    //$conexao = mysql_connect($server, $usuario, $senha);

//$db = mysql_select_db(65cipm,$conexao);

mysqli_set_charset($con, 'utf8') or die (mysqli_error($con));


?>