<?php


include "teste.php";
$id     = $_GET["id"];
$acao   = $_GET["acao"];
$form   = $_GET["form"];
$sql    = "SELECT * FROM `ocorrencias` WHERE `id` = $id";
$qry    = mysqli_query($con,$sql);
$row    = mysqli_fetch_array($qry);
$query  = mysqli_query($con,"SELECT * FROM `tipo de ocorrencias` ORDER BY `tipo de ocorrencias`.`Servico` ASC");
$query3 = mysqli_query($con,"SELECT `Viaturas` FROM `viaturas` WHERE 1");
?>



<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Relatório de Serviço</title>
        
</head>
<body>
    <form action="Op_Efet_Gu.php" method="post" id='form3'>
        <h2 style='text-align:center '>Relatório de Serviço</h2><br>
        <fieldset><legend>Dados Gerais</legend>
          <br><br>
            Guarnição:<br> <select name='gu_07'>
                <option>9.6507</option>
                <option>9.6577</option>
                <option>9.6572</option>
                <option>9.6565</option>
                <option>9.6534</option>
                <option>9.6539</option>
                <option>9.6540</option>
                <option>R0025</option>
                <option>G.E.T.O. 2 Rodas</option>
            </select> <input type="text" name="Mat_07" placeholder="Digite a Matrícula do CmT da GU" style="width: 200px;"><br>
</form>
            Guarnição:<br> <select name='gu_77'>
                <option>9.6507</option>
                <option selected>9.6577</option>
                <option>9.6572</option>
                <option>9.6565</option>
                <option>9.6534</option>
                <option>9.6539</option>
                <option>9.6540</option>
                <option>R0025</option>
                <option>G.E.T.O. 2 Rodas</option>
            </select> <input type="text" name="Mat_77" placeholder="Digite a Matrícula do CmT da GU" style="width: 200px;"><br>

            Guarnição:<br> <select name='gu_72'>
                <option>9.6507</option>
                <option>9.6577</option>
                <option selected>9.6572</option>
                <option>9.6565</option>
                <option>9.6534</option>
                <option>9.6539</option>
                <option>9.6540</option>
                <option>R0025</option>
                <option>G.E.T.O. 2 Rodas</option>
            </select> <input type="text" name="gu_72" placeholder="Digite a Matrícula do CmT da GU" style="width: 200px;"><br>



            Guarnição:<br> <select name='gu_GETO2R'>
                <option>9.6507</option>
                <option>9.6577</option>
                <option>9.6572</option>
                <option>9.6565</option>
                <option selected>G.E.T.O. 2 Rodas</option>
                <option>9.6539</option>
                <option>9.6540</option>
                <option>R0025</option>
                <option>G.E.T.O. 2 Rodas</option>
            </select> <input type="text" name="Mat_G2" placeholder="Digite a Matrícula do CmT da GU" style="width: 200px;"><br>


            Guarnição:<br> <select name='gu_39'>
                <option>9.6507</option>
                <option>9.6577</option>
                <option>9.6572</option>
                <option>9.6565</option>
                <option>9.6534</option>
                <option selected>9.6539</option>
                <option>9.6540</option>
                <option>R0025</option>
                <option>G.E.T.O. 2 Rodas</option>
            </select> <input type="text" name="Mat_39" placeholder="Digite a Matrícula do CmT da GU" style="width: 200px;"><br>



            Guarnição:<br> <select name='gu_40'>
                <option>9.6507</option>
                <option>9.6577</option>
                <option>9.6572</option>
                <option>9.6565</option>
                <option>9.6534</option>
                <option>9.6539</option>
                <option selected>9.6540</option>
                <option>R0025</option>
                <option>G.E.T.O. 2 Rodas</option>
            </select> <input type="text" name="Mat_40" placeholder="Digite a Matrícula do CmT da GU" style="width: 200px;"><br>


            Guarnição:<br> <select name='gu_R25'>
                <option>9.6507</option>
                <option>9.6577</option>
                <option>9.6572</option>
                <option>9.6565</option>
                <option>9.6534</option>
                <option>9.6539</option>
                <option>9.6540</option>
                <option selected>R0025</option>
                <option>G.E.T.O. 2 Rodas</option>
            </select> <input type="text" name="Mat_R25" placeholder="Digite a Matrícula do CmT da GU" style="width: 200px;"><br>

            Guarnição:<br> <select name='gu_90'>
                <option>9.6507</option>
                <option>9.6577</option>
                <option>9.6572</option>
                <option>9.6565</option>
                <option>9.6534</option>
                <option>9.6539</option>
                <option selected>9.6590</option>
                <option>9.6591</option>
                <option>9.6592</option>
                <option>9.6593</option>
                <option>R0025</option>
                <option>G.E.T.O. 2 Rodas</option>
            </select> <input type="text" name="Mat_90" placeholder="Digite a Matrícula do CmT da GU" style="width: 200px;"><br>

            Guarnição:<br> <select name='gu_91'>
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
                <option selected>9.6591</option>
                <option>9.6592</option>

                <option>9.6593</option>
            </select> <input type="text" name="Mat_91" placeholder="Digite a Matrícula do CmT da GU" style="width: 200px;"><br>

            Guarnição:<br> <select name='gu_92'>
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
                <option selected>9.6592</option>

                <option>9.6593</option>
            </select> <input type="text" name="Mat_92" placeholder="Digite a Matrícula do CmT da GU" style="width: 200px;"><br>

            </br>
            <input type="submit" name="Inserir" value='Enviar' class="btn">
            <input type="hidden" name="acao" value="Inserir">
            <input type="hidden"  name="id" value="<?php echo $id ?>">

        </fieldset>
        <br>





        
</form>

</body>
</html>

