<?php
include "teste.php";
$id = $_GET["id"];
$mat = $_GET["mat"];
echo $id."<br>" ;
echo $mat;
$sql = "DELETE FROM `GU_SERV` WHERE `id_Serv` = $id AND `MAT_CMT`= '$mat' ";
$qry = mysqli_query($con,$sql) or die (mysqli_error($con));
echo "<script type = 'text/JavaScript'> location.href ='http://localhost:8888/sistema/index.php?link=21&id=$id'</script> ";

?>