<?php

include "teste.php";
$txt_login =$_POST["txt_login"];
$txt_senha =$_POST["txt_senha"];
$sql ="SELECT * FROM admin WHERE login = '$txt_login' AND senha = '$txt_senha' " ;
$resutado =mysql_query($sql);
if(mysql_numrows($resutado) > 0){
    echo "este cliente existe";
}

?>