<?php

// conexão e seleção do banco de dados
/*

$server = 'mysql.hostinger.com.br';
$user = 'u552607284_65';
$password = '376563';
$db = 'u552607284_65c';
$con = mysqli_connect($server, $user, $password, $db);
*/

$server = 'localhost';
$user = 'root';
$password = 'root';
$db = '65cipm';
$con = mysqli_connect($server, $user, $password, $db);

    

mysqli_set_charset($con, 'utf8') or die (mysqli_error($con));


?>