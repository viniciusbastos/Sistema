<?php
include "config.php";
$query = "SELECT * FROM `ocorrencias` WHERE 1";
$result = mysql_query($query);
?>
<?php echo '[</br>' ?>
<?php while ($row = @mysqli_fetch_assoc($result)){
    // ADD TO XML DOCUMENT NODE
    echo '{</br>';
    echo '"Id":';
    echo  $row['id'] . ',</br> ';
    echo '"Latitude":';
    echo  $row['Latitude'] .',</br>';
    echo '"Longitude":';
    echo  $row['Longitude'] . ',</br> ';
    echo '"Descrição":"';
    echo  $row['Tipo'] . '" </br>';
    echo '}, </br>';
}?>
<?php echo ']' ?>
<?php




?>