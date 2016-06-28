<?php


include "teste.php";







//alterar dados




    $sql = "SELECT * FROM `Faltas_SP` WHERE  data_";
    mysqli_query($con, $sql) or die (mysqli_error($con));
    echo "Dados inseridos com sucesso!";


//echo "<script type = 'text/JavaScript'> location.href ='index.php?link=12'</script> "
?>