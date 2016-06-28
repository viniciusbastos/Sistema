



<table borde="1px" cellpadding="0" cellspacing="0">
    <tr>
        <td>Tipo</td>
        <td>Qtd</td>

    </tr>


<?php
include "teste.php";
$sql ="SELECT `Tipo`,COUNT(`Tipo`) FROM `Table 20` GROUP BY Tipo";
$qry = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($qry)){?>
    <tr><td><? echo $row[0]; ?></td>
        <td><? echo $row[1]; ?></td>
    </tr>
<? } ?>


</table>

