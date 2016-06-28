<?php
include "teste.php";
$id = $_GET["id"];
$mat = $_GET["mat"];
echo $id."<br>" ;
echo $mat;
$sql = "DELETE FROM `Permutas` WHERE `id_Serv` = $id AND `Mat_Soli`= '$mat' ";
$qry = mysqli_query($con, $sql) or die (mysqli_error($con));
echo "<script type = 'text/JavaScript'> location.href ='http://localhost:8888/sistema/index.php?link=12&id=$id'</script> ";

?>