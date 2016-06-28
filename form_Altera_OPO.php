  <?php 
        include "teste.php" ;
        include "logica-usuario.php";
        include "cabecalho.php"; 
        $id = $_GET["id"];
        verificaUsuario();   
        $query2 = mysqli_query($con,"SELECT * FROM `BAIRROS`");
        $query  = mysqli_query($con, "SELECT * FROM  `opo` WHERE  `Cod` = $id");
        $array = mysqli_fetch_array($query);
      
        ?>
        <div class="rows">
           <form method="post" action="logica-altera-opo.php">
            <div class="form-group">
             <label for="Nome"> Nome: </label>
             <input type="text" placeholder="Digite O nome do evento" id="Nome" name="Nome" class="form-control" value="<?= $array[0] ?>" >
         </div>
         <div class="form-group">
           <label for= "Local">Local do evento:</label>
           <input type="text" placeholder="Local do Evento" id="Local" name="Local" class="form-control" value="<?= $array[2] ?>">
        </div>

        <div class="form-group">
         <label for="Bairro"> Bairro:</label> 

         <select class="form-control" name="bairro" value="bairro" id="Bairro" value="<?= $array[3] ?>"> 
           <?php while($prod2 = mysqli_fetch_array($query2)) { 
              $essaEhACategoria = $prod2[0] == $array[3];
              $selecao = $essaEhACategoria ? "selected='selected'":""; ?>
               <option <?=$selecao ?> > <?php echo $prod2[0]; ?></option>
               <?php } ?>
           </select>
        </div>

        <label for="Data">DATA Inicial:</label>
        <input type="date" id="data" name="data" class="form-control" value="<?= $array[5] ?>">


        <label>DATA Final:</label>
        <input type="date" id="data2" name="data2" class="form-control" value="<?= $array[6] ?>">

        <label>Horário de Inicial: </label>
        <input type="time" id="hr_inicial" name="hr_inicial" class="form-control" value="<?= $array[7] ?>">

        <label>Horário de Término:</label>
        <input type="time" id="hr_termino" name="hr_termino" class="form-control" value="<?= $array[8] ?>" >
        <label>  Solicitante:</label>
        <input type="text" name="Solicitante" class="form-control" value="<?= $array[4] ?>">
        <label>Uniforme:</label>
        <select name="uni" id="uni" class="form-control" >
          <optgroup label="Uniforme">
            <option>B1</option>
            <option>B2</option>
            <option>B3</option>
            <option>B4</option>
        </optgroup>
        </select>

        <label>Armamento:</label>
        <select name="arm" id="arm" class="form-control" >
           <optgroup label="Armamento">
               <option>Pistola .40</option>
               <option>Pistola .380</option>
           </optgroup>
        </select>

        <label>Modalidade:</label>
        <select name="modalidade" id="modalidade" class="form-control" >
           <optgroup label="Modalidades">
               <option>Patrulhamento</option>
               <option></option>
           </optgroup>
        </select>


        <label>Processo:</label>
        <select name="processo" id="processo" class="form-control" >
            <optgroup label="processo">
                <option>A pé</option>
                <option>Motorizado</option>
            </optgroup>
        </select>


        <label>Viatura:</label>
        <select name='vtr'  class="form-control" >
           <option>Coordenador de Policiamento</option>
           <option>Maria Quiteria(9.6507)</option>
           <option>Bofim de Feira(R.0025)</option>
           <option>Jaguara(9.6577)</option>
           <option>9.6540</option>
           <option>9.6572</option>
           <option>G.E.T.O. (9.6565)</option>
           <option>G.E.T.O. 2 Rodas</option>
           <option>Hospital da Mulher</option>
        </select>


        <label>Outros Esclarecimentos:</label>        
        <textarea name="OtrEsclarecimentos"rows="5" class="form-control" ><? echo $array[13] ?></textarea>
        <input type="hidden" name="acao" value="Alterar">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="submit"  value="Alterar" class="btn btn-info btn-block">

        </form>
        </div>
        </div>
<?php include "rodape.php"; ?>
</body>
</html>