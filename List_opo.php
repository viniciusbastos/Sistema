<?php
/* Lista Ordens de Policiamento a partir da entrada de duas datas */


include "teste.php";
//criaçao de tabela mysql
//$data = date('y-m-d');
//$acao = $_GET["acao"];
//$diaAnterior = gmdate("y-m-d",time()-(36000*27));
$data           = $_POST["data"];
$diaAnterior    = $_POST["data2"];
//$bairro         = $_POST["bairro"];
?>

 <style>
        .table-hover>tbody>tr:hover>td, .table-hover>tbody>tr:hover>th {
            background-color: #4f4f4f;
            color:#eeeeee;
        }
    </style>

    <div class="col-sm-12 table-responsive">
        <table class="table table-hover table-condensed">
         <h3 style="align:center">Tabelas contendo OPO`s de <?php echo date("d/m/Y", strtotime($diaAnterior))  ?> à <?php echo date("d/m/Y", strtotime($data)) ?></h3>
                     <thead>
                     <tr >
                         <th class="col-md-4">Nome</th>
                         <th class="col-md-3">Local</th>
                         <th class="col-md-1">Bairro</th>
                         <th class="col-md-1">Data</th>
                         <th class="col-md-1">Horario de Inicio</th>
                         <th class="col-md-1">Horario de termino</th>
                         <th class="col-md-1">Inserir PTR</th>
                         <th class="col-md-1">Viatura</th>
                     </tr>
                    </thead>
                    <?php
                    $sql ="SELECT * FROM `opo`\n". "WHERE (((Data_Inicial) Between \"$diaAnterior\" And \"$data\"))" ;
                    $qry = mysqli_query($con, $sql);
                    while($resultado = mysqli_fetch_array($qry)) { "
                    "?>
                        <tbody>
                           <tr>
                            <td><?php echo $resultado[0]; ?></td>
                            <td><?php echo $resultado[2]; ?></td>
                            <td><?php echo $resultado[3]; ?></td>
                            <td><?php echo date("d/m/Y", strtotime($resultado[5])); ?></td>
                            <td><?php echo $resultado[6]; ?></td>
                            <td><?php echo $resultado[7]; ?></td>
                            <td><a href="form_ptr.php?id=<?php echo $resultado[1]; ?>" target="_blank"><center><img src="_imagens/Reports.png"></center></a></td></td>
                            <td><a href="relatorio_OPO.php?cod=<?php echo $resultado[1]; ?>" target="_blank"><center><img src="_imagens/Reports.png"></center></a></td></td>
                           </tr>
                        </tbody>


        <?php } ?>
        <? mysqli_close($con)?>
</table>
    </div>
<a href="index.php?link=5" style="margin-top: 50px; margin-left: 900px; margin-bottom: 30px">Voltar<a>
</html>