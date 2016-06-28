<?php
/*
A Listagem será realizada através de consulta SQL à tabela tbdadosvitima com get id consultado a partir da lista de ocorrenciaqs
Esse arquivo tem o objetivo de listar as vitimas permitindo a alteraçao ou a exclusão de qualquer uma das vitimas listadas
*/
include "teste.php";
$id = $_GET["id"];
$sql ="SELECT * FROM `tbdadosvitima` WHERE tbdadosvitima.id_Oco = $id" ;
$qry = mysqli_query($con, $sql) or die ();
//$res =mysql_fetch_array($qry);
?>

<!DOCTYPE html>
<html>
<head lang="pt-br">
    <meta charset="UTF-8">
    <title></title>
</head>

 <h2 id="center"> Lista das Vítimas da Ocorrencia n <? echo $id ?> </h2>
    
<table id="relat">
    <tr>
        <td id="cima">Nome</td>
        <td id="cima">Vulgo</td>
        <td id="cima">RG</td>
        <td id="cima">Endereço</td>
        <td id="cima">Bairro</td>
        <td id="cima">Outros dados</td>
        <td id="cima" style="text-align: center" colspan="2">Alterar/Excluir</td>

        <td id="cima">Excluir</td>
        <td id="cima">Relatório</td>



    </tr>
<?php
while($resultado = mysqli_fetch_array($qry)) { ?>
    <tr>

        <td><?php echo $resultado[2]; ?></td>
        <td><?php echo $resultado[3]; ?></td>
        <td><?php echo $resultado[4]; ?></td>
        <td><?php echo $resultado[5]; ?></td>
        <td><?php echo $resultado[6]; ?></td>
        <td><?php echo $resultado[8]; ?></td>


        <td><a href="bootstrap/index.php?link=14&acao=alterar&id=<?php echo $resultado[0]; ?>"><center>Alterar</center></a></td>
        <td><a href="http://localhost:8888/sistema/index.php?link=13&id=<?php echo $resultado[0]; ?>"><center><img src="_imagens/lista.png"></center></a></td>

        <td><a href="bootstrap/index.php?link=14&acao=excluir&id=<?php echo $resultado[0]; ?>"><center><img src="_imagens/deletered%20cópia.png"></center></a></td>
        <td><a href="http://localhost:8888/sistema/relatorio.php?id=<?php echo $resultado[0]; ?>"><center><img src="_imagens/Reports.png"></center></a></td>

    </tr>


<?php } ?>
</table>
    


</html>