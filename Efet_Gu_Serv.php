<?php


include "teste.php";
include "cabecalho.php";
include "logica-usuario.php";
verificaUsuario();

$id         = $_GET["id"];
$acao       = $_GET["acao"];
//$form       = $_GET["form"];


$sql        = "SELECT * FROM `ocorrencias` WHERE `id` = $id";
$qry        = mysqli_query($con,$sql);
$row        = mysqli_fetch_array($qry);
$query      = mysqli_query($con,"SELECT * FROM `tipo de ocorrencias` ORDER BY `tipo de ocorrencias`.`Servico` ASC");
$query3     = mysqli_query($con,"SELECT `Viaturas` FROM `viaturas` WHERE 1");
$query4     = mysqli_query($con,"SELECT * FROM `tbpel`");


?>



<div class="col-md-12" style="overflow-x:auto;">
    <div class="form-group">
        <div class="col-md-4 col-md-offset-4">
            <form action="banco-guarnicao.php" method="post" class="">
                <h3 style='text-align:center '>COMANDANTES DAS GUARNIÇOES EMPREGADAS</h3><br>
                  <br>
                        <label> Guarnição:</label>
                            <br>
                            <select name='gu' class="form-control">
                                <optgroup label="Distritos">
                                    <option>9.6507</option>
                                    <option>9.6577</option>
                                    <option>R0025</option>
                                </optgroup>
                                <optgroup label="Sede">
                                    <option>9.6572</option>
                                    <option>9.6565</option>
                                    <option>9.6534</option>
                                    <option>9.6539</option>
                                    <option>9.6540</option>
                                    <option>G.E.T.O. 2 Rodas</option>
                                    <option>Hospital da Mulher</option>
                                </optgroup>
                                <optgroup label="BCS-George">
                                    <option>9.6590</option>
                                    <option>9.6591</option>
                                    <option>9.6592</option>
                                    <option>9.6593</option>
                                </optgroup>
                            </select>
                        <label>Turno do Serviço:</label>
                            <select name = "turno" id='turno' class="form-control">
                                    <option>06h às 06h</option>
                                    <option>06h30min às 06h30min</option>
                                    <option>08h às 08h</option>
                                    <option>07h às 19h</option>
                                    <option>06h às 18h</option>
                                    <option>06h às 18h</option>
                                    <option>06h30min às 18h30min</option>
                                    <option>08h às 20h</option>
                                    <option>19h às 07h</option>
                                    <option>18h às 06h</option>
                                    <option>18h30min às 06h30min</option>
                                    <option>17h às 23h</option>
                                    <option>20h às 08h</option>\
                                    <option>07h às 23h</option>

                             </select>
                        <label>Matricula do Comandante da Guarnição:</label>
                            <input type="text" name="Mat" placeholder="Digite a Matrícula do Cmt da GU" class="form-control" required>
                        <label>Pelotão:</label>
                            <select  name="pel" class="form-control"></br>
                                <?php while($prod2 = mysqli_fetch_array($query4)) { ?>
                                    <option> <?php echo $prod2[1]; ?></option>
                                <?php } ?>

                            </select>
                        <br>
                        <div class="col-sm-4 col-sm-offset-4 ">

                        <input type="submit" name="Inserir" value='Enviar' class="btn btn-bitbucket ">
                        </div>
                        <input type="hidden"  name="id" value="<?php echo $id ?>">
                <br>
                <br>
        </form>
    </div>
</div>
<?php   include "Listar_gu.php" ; ?>
        <a class="btn btn-info" >Voltar</a>
<?php        

    include "rodape.php" ;

?>


