<?php


include "teste.php";

$query2 = mysqli_query($con,"SELECT * FROM `BAIRROS` ORDER BY `Campo1` ASC");


 while($prod2 = mysqli_fetch_array($query2)) {
 echo "< option>".$prod2[0]."< /option> <br>";
}

?>