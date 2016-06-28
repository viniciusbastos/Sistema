<?php


include "teste.php";
//criaçao de tabela mysql
//$data = date('y-m-d');
//$acao = $_GET["acao"];
//$diaAnterior = gmdate("y-m-d",time()-(3600*27));
$data   =   $_POST["data2"];
$data1  =   $_POST["data"];
$tipo   =   $_POST["tipo"];
$nPtr   =   $_GET["nptr"];
$id     =   $_GET["id"];
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Relatório Of. Coordenador</title>
    <style>
        table#rel{
            border: 1px solid #4a6bb1;
            padding: 5px 5px;
            background: rgba(74, 107, 177, 0.76);
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.41);
        }
        table#rel td#cima{
            background-color: rgba(74, 107, 177, 0);
            margin-bottom: 1px;
            padding: 2px;
            border:0.5px solid #000000;
            color: #ffffff;


        }
        table#rel td{
            background-color: #badbf7;
            border:0.2px solid #000000;

        }
    </style>
</head>
<body><center>
<table id="rel">
    <tr>
        <td id="cima">MAT</td>
        <td id="cima">POSTO/GRAD</td>

        <td id="cima">NOME</td>
        <td id="cima">FUNÇÃO</td>
        <td id="cima">Excluir</td>


    </tr>
        
            <?php
            $sql = "SELECT `id`, `id_OPO`, `n_ptr`, `Mat`, `Func` FROM `Efet_Ptr` WHERE `n_ptr` = '$nPtr' AND `id_OPO` = '$id'";
            $qry = mysqli_query($con, $sql);
            while($resultado = mysqli_fetch_array($qry)) {
                ?>
        <tr>
        <td><?php echo $resultado[3]; ?></td>
            <?php $mat = $resultado[3];
            $sql4 = "SELECT TbEfetivoPM.NOME, tbcargo.POSTO_GRAD FROM `GU_SERV` INNER JOIN TbEfetivoPM ON '$mat' = TbEfetivoPM.MAT INNER JOIN tbcargo ON TbEfetivoPM.CARGO = tbcargo.CARGOId";
            $qry4= mysqli_query($con,$sql4) or die ("nao foi possivel inserir os dados");
            $res = mysqli_fetch_array($qry4);
            ?>
            <td><?php echo $res[1]; ?></td>
            <td><?php echo $res[0]; ?></td>
            <td><?php echo $resultado[4]; ?></td>
            <td><?php echo $resultado[4]; ?></td>

            <td><a href="Form_produtividade.php?Gu_ServID=<? echo $resultado[0] ?>&id_Serv=<? echo $resultado[1]?>"><center><img src="_imagens/produtividade.png"></center></a></td>
            <td><a href="excluir.php?id=<? echo $resultado[1] ?>&mat=<?php echo $mat; ?>"><center><img src="_imagens/deletered%20cópia.png"></center></a></td>





         </tr>


            <?php } ?> 
</table>
</center>
</body>
</html>