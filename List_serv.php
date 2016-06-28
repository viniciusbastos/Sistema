<?php
include "teste.php";
include "cabecalho.php";
include "logica-usuario.php";

verificaUsuario();


$data = date('y-m-d');
 
$diaAnterior = gmdate("y-m-d",time()-(720000*27));
$id          = $_GET["id"];

?>

<!-- Exibe a lista com os coordenadores de Serviço nos ultimos 6 meses-->
<style>
    .table-hover>tbody>tr:hover>td, .table-hover>tbody>tr:hover>th {
        background-color: #4f4f4f;
        color:#eeeeee;
    }
</style>


    <?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
    <p class="alert-success"> Relatório removido com sucesso.</p>
    <?php } ?>  
    <h2 id="center"> Relatórios de Serviço dos dias <?php echo date("d/m/Y", strtotime($diaAnterior))  ?> à <?php echo date("d/m/Y", strtotime($data)) ?></h2>
    
    <table class="table table-bordered table-condensed table-hover" id="example">
        <thead>
            <tr>
                <td class="col-md-1">Turno</td>
                <td class="col-md-1">Viatura</td>
                <td class="col-md-1">Data</td>
                <td class="col-md-1">Mat</td>
                <td class="col-md-1">Posto/Grad</td>
                <td class="col-md-3">Nome</td>
                <td class="col-md-1">Incluir GU. de Serviço</td>
                <td class="col-md-1">Lançar Alterações Adm</td>
                <td class="col-md-1" colspan="2">Lançar/Listar<br>Oc. Policiais</td>
                <td id="cima">Excluir</td>
                <td id="cima">Relatório</td>
            </tr>
        </thead>
        <?php

        $sql ="SELECT * FROM `tbServ` WHERE `data` BETWEEN '$diaAnterior' AND '$data' ORDER BY `Data` DESC " ;
//$sql ="SELECT * FROM `tbServ` ORDER BY `Data` DESC" ;
        $qry = mysqli_query($con, $sql);
        
        while($resultado = mysqli_fetch_array($qry)) { ?>

            <tbody>
                <tr>

                    <td class="col-md-1"><?php echo $resultado[2]; ?></td>
                    <td class="col-md-1"><?php echo $resultado[3]; ?></td>
                    <td class="col-md-1"><?php echo date("d/m/Y", strtotime($resultado[1])); ?></td>
                    <td class="col-md-1"><?php echo $resultado[4]; ?></td>
                    <?php $mat = $resultado[4];

                    $sql2 = "SELECT TbEfetivoPM.Mat, TbEfetivoPM.NOME, tbcargo.POSTO_GRAD FROM (TbEfetivoPM INNER JOIN tbServ ON TbEfetivoPM.MAT = tbServ.Mat_cmt) INNER JOIN tbcargo ON TbEfetivoPM.CARGO = tbcargo.CARGOId WHERE (((tbServ.Mat_cmt)='$mat'))";     
                    $qry2= mysqli_query($con, $sql2) or die (mysqli_error($con));
                    $res = mysqli_fetch_array($qry2);
                    ?>



                    <td class="col-md-1"><?php echo $res[2]; ?></td>
                    <td class="col-md-5"><?php echo $res[1]; ?></td>
                    <td class="col-md-1"><a href="Efet_Gu_Serv.php?id=<?php echo $resultado[0]; ?>"><center><img src="_imagens/police.png"></center></a></td>

                    <td class="col-md-1"><a href="index.php?link=18&acao=Inserir&id=<?php echo $resultado[0]; ?>"><center><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></center></a></td>

                    <td class="col-md-1"><a href="index.php?link=2&acao=Inserir&id=<?php echo $resultado[0]; ?>"><center><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></center></a></td>
                    <td class="col-md-1"> <a href="index.php?link=12&id=<?php echo $resultado[0]; ?>"><center><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></center></a></td>

                    <td class="col-md-1">
                       <form action="Op_ServExcluir.php" method="post">
                           <button class="btn btn-danger">
                           <i class="fa fa-trash-o fa-lg"></i></a>
                           </button>
                           <input  name="excluit" type="submit"  class="hidden" />
                           <input type="hidden" name="id" value="<?=$resultado[0]?>" /> 
                           <input type="hidden" name="acao" value="Excluir" /> 
                       </form>
                   </td>
                   <td class="col-md-1"><center><a href="relatorio.php?id=<?php echo $resultado[0]; ?>" target="_blank"><span class="glyphicon glyphicon-file" aria-hidden="true"></center><span></a></td>

               </tr>
           </tbody>

           <?php } ?>

       </table>



       <? if($id != ""){
         include"list_oco2.php";
         include"list_permutas2.php";
     }
     ?>
<?php include "rodape.php"; ?>
