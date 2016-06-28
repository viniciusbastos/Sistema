<?php


include "teste.php";
//criaçao de tabela mysql
//$data = date('y-m-d');
//$acao = $_GET["acao"];
//$diaAnterior = gmdate("y-m-d",time()-(3600*27));
$data   = $_POST["data2"];
$data1  = $_POST["data"];
$tipo   = $_POST["tipo"];

?>

    <style>
        .table-hover>tbody>tr:hover>td, .table-hover>tbody>tr:hover>th {
            background-color: #4f4f4f;
            color:#eeeeee;
        }
    </style>

<div class="col-md-12" style="overflow-x:auto;">
    <div class="table-responsive">
                <table id="rel" class="table table-hover table-bordered table-condensed table-striped">
                    <thead>
                        <tr class="info">
                            <td id="cima">MAT</td>
                            <td id="cima">POSTO/GRAD</td>
                            <td id="cima">NOME</td>
                            <td id="cima">POSTO</td>
                            <td id="cima">PELOTÃO</td>
                            <td id="cima">PRODUTIVIDADE</td>
                            <td id="cima">Excluir</td>
                        </tr>
                    </thead>
                            <?php
                            $sql = "SELECT * FROM `GU_SERV` WHERE GU_SERV.id_Serv = '$id'";
                            $qry = mysqli_query($con,$sql) or die (mysqli_error($con));
                            while($resultado = mysqli_fetch_array($qry)) {?>
                        <tbody>
                                <tr>
                                <td><?php echo $resultado[2]; ?></td>
                                    <?php $mat = $resultado[2];
                                    $sql4 = "SELECT TbEfetivoPM.NOME, tbcargo.POSTO_GRAD FROM `GU_SERV` INNER JOIN TbEfetivoPM ON '$mat' = TbEfetivoPM.MAT INNER JOIN tbcargo ON TbEfetivoPM.CARGO = tbcargo.CARGOId";
                                    $qry4= mysqli_query($con,$sql4) or die ("nao foi possivel inserir os dados");
                                    $res = mysqli_fetch_array($qry4);
                                    ?>
                                    <td><?php echo $res[1]; ?></td>
                                    <td><?php echo $res[0]; ?></td>
                                    <td><?php echo $resultado[3]; ?></td>
                                    <td><?php echo $resultado[4]; ?></td>

                                    <td><a href="Form_produtividade.php?Gu_ServID=<? echo $resultado[0] ?>&id_Serv=<? echo $resultado[1]?>"><center><span class="glyphicon glyphicon-file" aria-hidden="true"></span></center></a></td>
                                    
                                    <td><a href="excluir.php?id=<? echo $resultado[1] ?>&mat=<?php echo $mat; ?>"><center><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></center></a></td>

                                 </tr>
                        </tbody>

                            <?php } ?>
                </table>