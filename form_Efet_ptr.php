<?php


include "teste.php";
$id         = $_GET["id"];
$acao       = $_GET["acao"];
$form       = $_GET["form"];
$nPtr       = $_GET["nptr"];

$sql        = "SELECT * FROM `ocorrencias` WHERE `id` = $id";
$qry        = mysqli_query($con,$sql);
$row        = mysqli_fetch_array($qry);
$query      = mysqli_query($con,"SELECT * FROM `tipo de ocorrencias` ORDER BY `tipo de ocorrencias`.`Servico` ASC");
$query3     = mysqli_query($con,"SELECT `Viaturas` FROM `viaturas` WHERE 1");
$query4     = mysqli_query($con,"SELECT * FROM `tbpel`");
?>



<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Relatório de Serviço</title>
        
</head>
<style>
    select, input{
        padding: 0.2em;
        border: 1px solid #CCC;
        box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
        font-size: 10pt;
    }
</style>
<body>
    <form action="Op_Efet_PTR.php" method="post" id='form3'>
        <h3 style='text-align:center '>COMANDANTES DAS GUARNIÇOES EMPREGADAS</h3><br>
        <fieldset style="border: 0px">
          <br><br>

                <select name = "funcao" id='funcao'>
                <option>CMT</option>
                <option>PTR</option>
                <option>CF</option>
            </select>
            <input type="text" name="Mat" placeholder="Digite a Matrícula do Policial" style="width: 200px;">

            <input type="submit" name="Inserir" value='Enviar' class="btn">
            <input type="hidden" name="acao" value="Inserir">
            <input type="hidden"  name="id" value="<?php echo $id ?>">
            <input type="hidden"  name="nPTR" value="<?php echo $nPtr ?>">

            <br>
            <br>
</form>

<? include "list_ptr.php" ; ?>

</body>
</html>

