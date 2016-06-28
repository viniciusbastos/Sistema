            <?php
            include "teste.php";
            include "restrito.php";
            $id             = $_GET["id"];
            $sql2           = "SELECT * FROM `tbServ` WHERE id = '$id' ";
            $qry            = mysqli_query($con, $sql2) or die (mysqli_error($con));
            date_default_timezone_set('Brazil/East');
            $res            = mysqli_fetch_array($qry);
            $data           = date('y-m-d');
            //$acao = $_GET["acao"];
            $tipo           = $_GET["tipo"];
            $diaAnterior    = gmdate("y-m-d",time()-(36000*27));
            $dataAtual      = date('y-m-d');


            ?>


            <!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <title>Relatório Coordenador</title>
                <link rel="shortcut icon" href="65.ico" >

                <style>
                    h3{
                        margin-bottom: 0px;
                        margin-top: 0px;
                        font-size: 8pt;
                    }
                </style>
                <link rel="stylesheet" type="text/css" href="_css/estiloOPO.css"/>
                <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
               
                

            </head>
            <body>
            <header>
                <center> <img src="_imagens/pmba.png" id="pmba" style="margin-bottom: 0px"></center>
                <h3>65ª COMPANHIA INDEPENDENTE DE POLÍCIA MILITAR</h3>
                <h3 > Relatório de Serviço do dia <?php     echo "".date("d/m/Y", strtotime($res[1]))."                 das              ".$res[2]."<br>";
                    ?>
                        
                </h3>
            </header>
            <div class="container">


            <?php

                echo "<h3>Viatura Empregada:  ".$res[3]."</h3>";

            ?>
            <h4>Material a cargo:</h4>
            Celular FUNCIONAL:<input type="checkbox">
            Pasta do Coordenador: <input type="checkbox">
            <br>
                <h4> Pesssoal de Serviço:</h4>
                <table  class="table table-condensed table-bordered">
                    <tr>
                        <td id="cima" width="10%">MAT</td>
                        <td id="cima" width="13%">POSTO/GRAD</td>

                        <td id="cima" width="50%">NOME</td>
                        <td id="cima" width="27%">POSTO de Serviço</td>


                    </tr>

                    <?php
                    $sql = "SELECT * FROM `GU_SERV` WHERE GU_SERV.id_Serv = '$id'";
                    $qry = mysqli_query($con, $sql);
                    while($resultado = mysqli_fetch_array($qry)) {
                        ?>
                        <tr>
                            <td><?php echo $resultado[2]; ?></td>
                            <?php $mat = $resultado[2];
                            $sql4 = "SELECT TbEfetivoPM.NOME, tbcargo.POSTO_GRAD FROM `GU_SERV` INNER JOIN TbEfetivoPM ON '$mat' = TbEfetivoPM.MAT INNER JOIN tbcargo ON TbEfetivoPM.CARGO = tbcargo.CARGOId";
                            $qry4= mysqli_query($con, $sql4) or die ($con);
                            $res = mysqli_fetch_array($qry4);
                            ?>
                            <td><?php echo $res[1]; ?></td>
                            <td><?php echo $res[0]; ?></td>
                            <td><?php echo $resultado[3]; ?></td>






                        </tr>


                    <?php } ?>
                </table>
            <h4>Ocorrências Administrativas:</h4> <br>
                <?php

                //$sql ="SELECT * FROM `tbServ` WHERE `data` BETWEEN '$diaAnterior' AND '$data' " ;
                $sql ="SELECT * FROM `Diversos` WHERE `id_Serv` ='$id'" ;
                $qry = mysqli_query($con, $sql);

                ?>
               <?php  while($resultado = mysqli_fetch_array($qry)) { ?>
                <? if ($resultado[0] != ' '  ){  ?>

                <table  class="table table-condensed table-bordered">
                    <tr>
                        <td id="cima" width="30px">TIPO</td>
                        <td id="cima" width="100px">Posto de Serviço:</td>
                        <td id="cima">Observação:</td>
                    </tr>

                        <tr>

                            <td>Diversos</td>
                            <td><?php echo $resultado[2]; ?></td>

                            <td><p align="justify"><?php echo $resultado[3]; ?></p></td>


                        </tr>
                        <?php } ?>

                    <?php } ?>
                </table>
                <br>
                <br>
                <?php $sql9 ="SELECT * FROM `Faltas` WHERE `id_Serv` = '$id'" ;
                $qry9 = mysqli_query($con, $sql9);
                if(!mysqli_num_rows($qry9)){

                }

                else{ ?>
                <table  class="table table-condensed table-bordered">
                    <tr>
                        <td id="cima" width="4%">Tipo</td>
                        <td id="cima" width="6%">Matrícula</td>
                        <td id="cima" width="7%">Posto/Grad</td>
                        <td id="cima" width="31%">Nome</td>
                        <td id="cima">Posto de Serviço</td>
                        <td id="cima">Justificativa</td>
                        <td id="cima">Observaçoes</td>

                    </tr>
                    <?php



                    while ($resultado9 = mysqli_fetch_array($qry9)) { ?>

                        <tr>

                            <td>Falta</td>
                            <td><?php echo $resultado9[2]; ?></td>
                            <?php $mat = $resultado9[2];
                            $sql2 = "SELECT Faltas.Mat, TbEfetivoPM.NOME, tbcargo.POSTO_GRAD FROM (TbEfetivoPM INNER JOIN Faltas ON TbEfetivoPM.MAT = Faltas.Mat) INNER JOIN tbcargo ON TbEfetivoPM.CARGO = tbcargo.CARGOId WHERE (((Faltas.Mat)='$mat'))";
                            $qry2 = mysqli_query($con, $sql2) or die ("nao foi possivel inserir os dados");
                            $res2 = mysqli_fetch_array($qry2);
                            ?>
                            <td><?php echo $res2[2]; ?></td>
                            <td><?php echo $res2[1]; ?></td>
                            <td><?php echo $resultado9[3]; ?></td>
                            <?php $mat2 = $resultado9[3]; ?>
                            <td><?php echo $resultado9[4]; ?></td>

                            <td><?php echo $resultado9[5]; ?></td>
                        </tr>

                    <? }
                    } ?>

            </table>

            <br>
            <br>
                <?
                $sql5 = "SELECT * FROM `Permutas` WHERE `id_Serv` = '$id'" ;
                $qry5 =     mysqli_query($con, $sql5);


                if(!mysqli_num_rows($qry5)){

                }

                    else{ ?>

                <table  class="table table-condensed table-bordered">
                <tr>
                    <td id="cima">TIPO</td>
                    <td id="cima">Mat</td>
                    <td id="cima">Posto/Grad</td>
                    <td id="cima">Nome /SUBSTITUÍDO</td>
                    <td id="cima">Mat</td>
                    <td id="cima">Posto/Grad</td>
                    <td id="cima">Nome / SUBSTITUTO</td>
                    <td id="cima">Posto de Serviço</td>

                </tr>

                <?php


                while($resultado = mysqli_fetch_array($qry5)) { ?>

                    <tr>

                        <td>PERMUTA</td>
                        <td><?php echo $resultado[2]; ?></td>
                        <?php $mat = $resultado[2];
                        $sql2 = "SELECT Permutas.Mat_soli, TbEfetivoPM.NOME, tbcargo.POSTO_GRAD FROM (TbEfetivoPM INNER JOIN Permutas ON TbEfetivoPM.MAT = Permutas.Mat_soli) INNER JOIN tbcargo ON TbEfetivoPM.CARGO = tbcargo.CARGOId WHERE (((Permutas.Mat_soli)='$mat'))";     
                        $qry2= mysqli_query($con, $sql2) or die ("nao foi possivel inserir os dados");
                        $res6 = mysqli_fetch_array($qry2);
                        ?>
                        <td><?php echo $res6[2]; ?></td>
                        <td><?php echo $res6[1]; ?></td>
                        <td><?php echo $resultado[3]; ?></td>
                        <?php $mat2 = $resultado[3];
                        $sql3 = "SELECT Permutas.Mat_Subs, TbEfetivoPM.NOME, tbcargo.POSTO_GRAD FROM (TbEfetivoPM INNER JOIN Permutas ON TbEfetivoPM.MAT = Permutas.Mat_Subs) INNER JOIN tbcargo ON TbEfetivoPM.CARGO = tbcargo.CARGOId WHERE (((Permutas.Mat_Subs)='$mat2'))";    
                        $qry3= mysqli_query($con, $sql3) or die ("nao foi possivel inserir os dados");
                        $res2 = mysqli_fetch_array($qry3);
                        ?>
                        <td><?php echo $res2[2]; ?></td>
                        <td><?php echo $res2[1]; ?></td>
                        <td><?php echo $resultado[4]; ?></td>


                    </tr>

                <?php } ?>


            </table>
                <? } ?>


    <br>
                <h4>Ordens de Policiamento Ostensivo</h4>



                <table  class="table table-condensed table-bordered">
                    <tr>
                        <td id="cima">Nome</td>
                        <td id="cima">Local</td>
                        <td id="cima">Bairro</td>
                        <td id="cima">Data</td>
                        <td id="cima">Horario de Inicio</td>
                        <td id="cima">Horario de termino</td>
                        <td id="cima">Viatura</td>

                    </tr>
                    <?php
                    $sql ="SELECT * FROM `opo`\n". "WHERE (((Data_Inicial) Between \"$diaAnterior\" And \"$dataAtual\"))" ;
                    $qry = mysqli_query($con, $sql);
                    while($resultado = mysqli_fetch_array($qry)) { ?>
                        <tr>

                            <td><?php echo $resultado[0]; ?></td>
                            <td><?php echo $resultado[2]; ?></td>
                            <td><?php echo $resultado[3]; ?></td>
                            <td><?php echo date("d/m/Y", strtotime($resultado[5])); ?></td>
                            <td><?php echo $resultado[6]; ?></td>
                            <td><?php echo $resultado[7]; ?></td>
                            <td><?php echo $resultado[13]; ?></td>


                        </tr>


                    <?php } ?>
                </table>







                <h4>Ocorrências Policiais:</h4>
    <center>


    <table  class="table table-condensed table-bordered">
        <tr>
        <td id="cima">Tipo</td>
        <td id="cima">Bairro</td>
        <td id="cima">Resumo</td>
        <td id="cima">Horario</td>
    </tr>

            <?php
            $sql = "SELECT * FROM `ocorrencias` WHERE `id_Serv` = $id";
            $qry2 = mysqli_query($con, $sql);
            while($resultado = mysqli_fetch_array($qry2)) { ?>

        <tr>
            <td><?php echo $resultado[2]; ?></td>
            <td><?php echo $resultado[4]; ?></td>
            <td style="text-align: justify"><?php echo $resultado[5]; ?></td>
            <td><?php echo $resultado[7]; ?></td>


        </tr>


    <?php } ?>

    </table>
    </center>



</div>
<footer>
    <h4 style="text-align: right"> Feira de Santana, <?php

        $meses = array (1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro");

        $diasdasemana = array (1 => "Segunda-Feira",2 => "Terça-Feira",3 => "Quarta-Feira",4 => "Quinta-Feira",5 => "Sexta-Feira",6 => "Sábado",0 => "Domingo");

        $hoje = getdate();

        $dia = $hoje["mday"];

        $mes = $hoje["mon"];

        $nomemes = $meses[$mes];

        $ano = $hoje["year"];

        $diadasemana = $hoje["wday"];

        $nomediadasemana = $diasdasemana[$diadasemana];

        echo "$nomediadasemana, $dia de $nomemes de $ano";

        ?></h4>
<?php

$qr = mysqli_query($con, "SELECT * FROM `tbServ` WHERE id = '$id' ");
$mat_coord = mysqli_fetch_array($qr);

$sql6 = "SELECT tbServ.Mat_cmt, TbEfetivoPM.NOME, tbcargo.POSTO_GRAD FROM (TbEfetivoPM INNER JOIN tbServ ON TbEfetivoPM.MAT = tbServ.Mat_cmt) INNER JOIN tbcargo ON TbEfetivoPM.CARGO = tbcargo.CARGOId WHERE (((tbServ.Mat_cmt)='$mat_coord[4]'))";
$qry6= mysqli_query($con, $sql6) or die (mysqli_error($con));
$res7 = mysqli_fetch_array($qry6);
    if($res7[0] == '304872567'){
      ?>  <img src="_imagens/ass2.png" style="align-content: center; margin-bottom: 0px">
    <? }
    elseif($res7[0] == '305209026'){?>
        <img src="_imagens/taylor%20swift%20signature.png" style="align-content: center; margin-bottom: 0px">
   <? }
echo " <br>".$res7[1]."  -  ".$res7[2] ?>
    <center>Coordenador de Policiamento Ostensivo</center>

</footer>
</body>
</html>

