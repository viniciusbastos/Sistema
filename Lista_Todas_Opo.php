<?php
/* Lista Ordens de Policiamento a partir da entrada de duas datas */

include "cabecalho.php";
include "logica-usuario.php";
verificaUsuario();
?>

    <style>
        .table-hover>tbody>tr:hover>td, .table-hover>tbody>tr:hover>th {
            background-color: #4f4f4f;
            color:#eeeeee;
        }
    </style>
 <h3 style="text-align:center">Ordens de Policiamento Ostensivo</h3>
 <a class="btn btn-info" href="form_OPO.php" ></a>
    <div class="col-sm-12 table-responsive">
        <table class="table table-hover table-condensed table-bordered">
        
                     <thead>
                     <tr >
                         <th class="col-md-2">Nome</th>
                         <th class="col-md-2">Local</th>
                         <th class="col-md-1">Bairro</th>
                         <th class="col-md-1">Inicio</th>
                          <th class="col-md1">FIM</th>
                         <th class="col-md-1">Horario de Inicio</th>
                         <th class="col-md-1">Horario de termino</th>
                         <th class="col-md-1">Alterar</th>
                         <th class="col-md-1">Visualizar</th>
                         <th class="col-md-1">Exclui</th>
                     </tr>
                    </thead>
                    <?php
                    $sql ="SELECT * FROM `opo`" ;
                    $qry = mysqli_query($con, $sql);
                    while($resultado = mysqli_fetch_array($qry)) { "
                    "?>
                        <tbody>
                           <tr>
                            <td><?php echo $resultado[0]; ?></td>
                            <td><?php echo $resultado[2]; ?></td>
                            <td><?php echo $resultado[3]; ?></td>
                            <td><?php echo date("d/m/Y", strtotime($resultado[5])); ?></td>
                            <td><?php echo date("d/m/Y", strtotime($resultado[5])); ?></td>
                            <td><?php echo $resultado[7]; ?></td>
                            <td><?php echo $resultado[8]; ?></td>
                            <td><a href="form_Altera_OPO.php?id=<?php echo $resultado[1]; ?>"><center><img src="_imagens/Reports.png"></center></a></td></td>
                            <td><a href="relatorio_OPO.php?cod=<?php echo $resultado[1]; ?>" target="_blank"><center><img src="_imagens/Reports.png"></center></a></td></td>
                            <td>
                       <form action="logica-altera-opo.php" method="post">
                           <button class="btn btn-danger">
                           <i class="fa fa-trash-o fa-lg"></i></a>
                           </button>
                           <input  name="excluit" type="submit"  class="hidden" />
                           <input type="hidden" name="id" value="<?=$resultado[1]?>" /> 
                           <input type="hidden" name="acao" value="<Excluir" /> 
                       </form>
                   </td>
                           </tr>
                        </tbody>


        <?php } ?>
        <? mysqli_close($con)?>
</table>
    </div>
<a href="index.php" class="btn btn-success">Voltar<a>
<?php include "rodape.php" ?>