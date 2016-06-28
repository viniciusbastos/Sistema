
<?php


include "teste.php";
//criaçao de tabela mysql
$id     = $_GET["id"];
$acao   = $_POST["acao"];

$sql = "SELECT * FROM `Servico`";
$qry = mysqli_query($con,$sql);
//$resul = mysqli_fetch_array($qry);
//$data = $resul[1];
//$turno = $resul[2];

$query = mysqli_query($con, "SELECT * FROM `tipo de ocorrencias` ORDER BY `tipo de ocorrencias`.`Servico` ASC");
$query2 = mysqli_query($con,"SELECT `Viaturas` FROM `viaturas`");
$query3 = mysqli_query($con, "SELECT * FROM `BAIRROS` ORDER BY `Campo1` ASC");


?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Relatório do Coordenador</title>
</head>

<body>

                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <h2 align="center" id="titulo2">Estatística por Período</h2>

                                <form  method="post" id="for">

                                    Data Inicial: <input class="form-control" type="date" name="data" >
                                    Data Final: <input class="form-control" type="date" name="data2">


                                    <legend>Horário</legend>
                                    Inicial: <input class="form-control" type="time" name="hr_ini" value="00:00">
                                    Final: <input class="form-control" type="time" name="hr_fim" value="23:59">



                                    Bairro: <select class="form-control"  name="bairro"></br>
                                        <?php while($prod2 = mysqli_fetch_array($query3)) { ?>
                                            <option> <?php echo $prod2[0]; ?></option>
                                        <?php } ?>

                                    </select>

                                    <br>
                                    Tipo:   <select class="form-control"  name="tipo" > </br>
                                                <?php while($prod = mysqli_fetch_array($query)) { ?>
                                                    <option> <?php echo $prod[0]; ?></option>
                                                <?php } ?>
                                            </select>
                                    <br>
                                    <input type="submit" value="CONSULTAR" class="btn btn-instagram">
                                    <input type="hidden" name="acao" value="pesquisar">

                    
                    
                                 </form>
</div>
                    <div class="container">
                        <div class="row">

                            <?php
                                if ($acao == "pesquisar"){
                                    include "Op_estatistica.php";
                                    include "mapaComGraf.php";
                                    include "GraficoestatisticaBairro.php";
                                }
                            ?>
                        </div>
                    </div>    
</body>
</html>

