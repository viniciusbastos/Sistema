
Ocorrencias Administrativas:
<?php
include "teste.php";

$tipo = $_GET["tipo"];
$id = $_GET["id"];
$acao =  $_GET["acao"];

    if($tipo == ""){
        echo    "<form method='get' action='index.php?link=18&'><select name='tipo'>
           <option> Permuta</option>
            <option> Falta</option>
            <option> Diversos</option>
        </select>
         <input type='hidden' name='link' value='18'>
         <input type='hidden' name='id' value='$id'>
        <input type='hidden' name='acao' value='$acao'>
        <input type='submit'>
    </form>";
    }

    if($tipo == "Permuta"){

        echo "<form method='post' action='Op_Permuta.php'>
                    Mat do Pm escalado:<br><input type='text' name='Mat_escalado'><br>
                    Mat do Pm substituto:<br><input type='text' name='Mat_subs'><br>
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
                    </select><br>
                    Obs:<br><textarea name='obs'></textarea>
                    <input type='hidden' name='acao' value='$acao'>
                    <input type='hidden' name='id' value='$id'>
                    <input type='hidden' name='tipo' value='$tipo'><br>
                    <input type='submit'>
             </form>";

    }
   If($tipo == "Falta"){
       echo "<form action='Op_Falta.php' method='post'>
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
                    </select><br>
                    Justificativa: <br>
                    <input type='radio' name='justificativa' value='Atestado Médico (Homologado)'>Atestado Médico (Homologado)<br>
                    <input type='radio'name='justificativa' value='Dispensa de Serviço'>Dispensa de Serviço<br>
                    <input type='radio'name='justificativa' value='Atestado Médico'>Atestado Médico<br>
                    <input type='radio'name='justificativa' value='Acompanhamento'>Acompanhamento<br>
                    <input type='radio'name='justificativa' value='Aniversário'>Aniversário<br>
                    <input type='radio'name='justificativa' value='Extrapolar a C.H.'>Extrapolar a C.H.<br>
                    <input type='radio'name='justificativa' value='Dispensa por Apreensão de Arma de Fogo'>Dispensa por Apreensão de Arma de Fogo<br>
                    <input type='radio'name='justificativa' value='Injustificada'>Injustificada<br>
                    Obs:<br><textarea name='obs'></textarea><br>
                    <input type='submit' value='Enviar'>
                    <input type='hidden' name='acao' value='$acao'>
                    <input type='hidden' name='id' value='$id'>
                    <input type='hidden' name='tipo' value='$tipo'><br>

            </form>";

   }
   if($tipo == "Diversos"){
       echo "<form method='post' action='Op_Diversos.php'>

                    Posto de Serviço<br><select name='Posto_serv'>
                    <option>Maria Quiteria(9.6507)</option>
                    <option>Bofim de Feira(R.0025)</option>
                    <option>Jaguara(9.6577)</option>
                    <option>Coordenado(9.6540)</option>
                    <option>9.6572</option>
                    <option>G.E.T.O. (9.6565)</option>
                    <option>G.E.T.O. 2 Rodas</option>
                    <option>Hospital da Mulher</option>
                    </select><br>
                    Obs:<br><textarea name='obs' cols='98' rows='20' ></textarea>
                    <input type='hidden' name='acao' value='$acao'>
                    <input type='hidden' name='id' value='$id'>
                    <input type='hidden' name='tipo' value='$tipo'><br>
                    <input type='submit'>
             </form>";


   }
?>


<html>
