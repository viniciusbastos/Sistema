<?php


include "teste.php";
//criaçao de tabela mysql
//$data = date('y-m-d');
//$acao = $_GET["acao"];
//$diaAnterior = gmdate("y-m-d",time()-(3600*27));
//*listar armas de fogo apreendidas
$id =$_GET["id"];
?>
<!DOCTYPE html>
<html>
<head lang="pt-br">
    <meta charset="UTF-8">
    <title>Relatório Of. Coordenador</title>
</head>

<body>
<br>
<br>
<br>
<br>
<br>
<h3 style="text-align: center">Lista de Ocorrencias</h3>
<table  id="relat">
    <tr>
        <td id="cima">Tipo</td>
        <td id="cima">Bairro</td>
        <td id="cima">Resumo</td>
        <td id="cima">Data</td>

        <td id="cima" colspan="2" align="center">Opçao</td>
        <td id="cima" colspan="2" align="center">Inserir Vítima/Acusado</td>
        <td id="cima" colspan="2" align="center">Inserir Material Apreendido</td>


    </tr>
        
<?php
$sql = "SELECT * FROM `ocorrencias` WHERE `id_Serv` = $id";
$qry = mysqli_query($con, $sql);
while($resultado = mysqli_fetch_array($qry)) { ?>
        <tr>
        <td><?php echo $resultado[2]; ?></td>
        <td><?php echo $resultado[4]; ?></td>
        <td style="text-align: justify"><?php echo $resultado[5]; ?></td>


            <td><?php echo $resultado[6]; ?></td>

        <td><a href="bootstrap/index.php?link=2&acao=Alterar&id=<?php echo $resultado[1] ; ?>" > Alterar</a></td>
        <td><a href="bootstrap/index.php?link=2&acao=Excluir&id=<?php echo $resultado[1] ; ?>" > Excluir</a></td>

            <td><a href="bootstrap/index.php?link=14&acao=Inserir&id=<?php echo $resultado[1] ; ?>" > Inserir</a></td>
            <td><a href="bootstrap/index.php?link=15&acao=Inserir&id=<?php echo $resultado[1] ; ?>" > Listar</a></td>
            <td><a href="bootstrap/index.php?link=16&acao=Inserir&id=<?php echo $resultado[1] ; ?>" > Inserir</a></td>
       
            <td><a href="bootstrap/index.php?link=15&acao=Inserir&id=<?php echo $resultado[1] ; ?>" > Listar</a></td>
         </tr>


            <?php } ?>

</table>

</body>
</html>