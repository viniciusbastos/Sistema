<?php


include "teste.php";
//criaçao de tabela mysql
$id = $_GET["id"];
$acao = "Inserir";

$sql = "SELECT * FROM `Servico`";
$qry = mysql_query($sql);
$resultado = mysql_fetch_array($qry);


$query = mysql_query("SELECT * FROM `tipo de ocorrencias`");
$query2 = mysql_query("SELECT `Viaturas` FROM `viaturas`");


$data = $resultado[1];
$turno = $resultado[2];


?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Relatório Of. Coordenador</title>
</head>
<body>
<form action="Op_Serv.php" method="post">
    <P> Relatório Of. Coordenador</br></br>
        Data: <input type="date" name="data" value="<?php echo $data; ?>">
        Turno: <input type="Turno" name="turno" value="<?php echo $turno; ?>">
    </P>
    <p>
        <input type="hidden"  name="acao" value="<?php echo $acao ?>">
        <input type="hidden"  name="id" value="<?php echo $id ?>">
        <input type="submit" value="<?php echo $acao ?>">
    </p>
</form>

</body>
</html>

