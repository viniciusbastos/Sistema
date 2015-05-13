<?php


include "teste.php";
?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Relatório de Serviço</title>
</head>
<body>
    <form action="Op_Serv.php" method="post">
        Relatório de Serviço<br>

            Data: <input type="date" name="data"><br>
            Turno: <select name = "turno">
                <option>07 às 19</option>
                <option>06 às 18</option>
                <option>08 às 20</option>
                <option>06 às 06</option>
                <option>19 às 07</option>
                <option>18 às 20</option>
                <option>20 às 08</option>
                <option>07 às 23</option>

            </select>
          <br>
            Guarnição: <select name='gu'>
                <option>9.6507</option>
                <option>9.6577</option>
                <option>9.6572</option>
                <option>9.6565</option>
                <option>9.6534</option>
                <option>9.6539</option>
                <option>9.6540</option>
                <option>R0025</option>
                <option>G.E.T.O. 2 Rodas</option>
            </select> <br>
            Cmt da Gu: <input type="text" name="cmt"><br>
        <input type="submit" value="Inserir">
        <input type="hidden" name="Inserir" value="Inserir">

</form>

</body>
</html>

