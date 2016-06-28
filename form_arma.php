<?php
   $id = $_GET["id"];
   $acao = $_GET["acao"];
    echo " <form method='post' action='Op_arm.php'>    <fieldset  id='arma'><legend>Arma de Fogo</legend>";
    echo "<input type='hidden'value='arma'>";
    echo "Tipo de Arma: <select name='tipoarma'><option>Revolver</option>
                <option>Pistola</option>
                <option>Carabina</option>
                <option>Fuzil</option>
                <option>Não Informado</option>
               </select>   ";
    echo "Marca: <input name='marca' type='text'>";
    echo "Numeração: <input type='text' name='num'>";
    echo "Calibre: <select name='calibre'><option>32</option>
                <option>38</option>
                <option>40</option>
                <option>5.56</option>
                <option>7.65</option>
                <option>7.62</option>
               </select> </br>";

    echo "Gu Empregada: <select name='gu'>
                <option>9.6507</option>
                <option>9.6577</option>
                <option>9.6572</option>
                <option>9.6565</option>
                <option>9.6534</option>
                <option>9.6539</option>
                <option>9.6540</option>
                <option>R0025</option>
                <option>G.E.T.O. 2 Rodas</option>
                <option>9.6590</option>
                <option>9.6591</option>
                <option>9.6592</option>

                <option>9.6593</option>
               </select> </br>";
    echo "</fieldset>
          <input type='submit' >
          <input type='hidden' name='id' value='$id'>
              <input type='hidden' name='acao' value='$acao'>
          </form>";

?>