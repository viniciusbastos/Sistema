<?php


include "teste.php";
//criaçao de tabela mysql
$id     = $_GET["id"];
$acao   = "Inserir";

$sql        = "SELECT * FROM `Servico`";
$qry        = mysqli_query($con,$sql);
$resultado  = mysqli_fetch_array($qry);


$query  = mysqli_query($con,"SELECT * FROM `tipo de ocorrencias`");
$query2 = mysqli_query($con,"SELECT `Viaturas` FROM `viaturas`");


$data  = $resultado[1];
$turno = $resultado[2];


?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Relatório Of. Coordenador</title>
</head>
<body>
<div class="form-group">    

<form action="Op_Serv.php" method="post">
        Relatório Of. Coordenador

        Data: <input type="date" name="data" value="<?php echo $data; ?> " required>
        Turno: <input type="Turno" name="turno" value="<?php echo $turno; ?>" required>
    
        <input type="hidden"  name="acao" value="<?php echo $acao ?>">
        <input type="hidden"  name="id" value="<?php echo $id ?>">
        <input type="submit" value="<?php echo $acao ?>">
    
</form>
</div>

</body>
</html>

