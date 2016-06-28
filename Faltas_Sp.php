
<h2>Atestados Médicos</h2>
<?php
include "teste.php";

$id     =   $_GET["id"];
$acao   =   $_GET["acao"];



    echo "<form action='Op_Falta_SP.php' method='post'>
                    Matrícula<br><input type='text' name='Mat'><br>
                    Posto de Serviço<br><select name='Posto_serv'>
                    <option>Coordenador de Policiamento</option>
                    <option>Maria Quiteria(9.6507)</option>
                    <option>Bofim de Feira(R.0025)</option>
                    <option>Jaguara(9.6577)</option>
                    <option>9.6540</option>
                    <option>9.6572</option>
                    <option>G.E.T.O. (9.6565)</option>
                    <option>G.E.T.O. 2 Rodas</option>
                    <option>Hospital da Mulher</option>
                    <option>Sala de Meios</option>
                    </select><br><br>
                    Data Inicial:<br> <input type='date' name='data_inicial'><br>
                    Data Final:<br> <input type='date' name='data_final'><br>
                    <input type='submit'>
            </form>";





?>


<html>
