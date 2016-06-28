<?php
include "cabecalho.php";
include "teste.php";
include "logica-usuario.php";
verificaUsuario();
$acao = "Inserir";
?>

        <div class="row">
                        <div class="col-md-4 col-md-offset-4">

                                <h3 id="titulo2">Produtividade por Período</h3>

                                <form  method="post"  role="form">
                                <label>Data Inicial: </label>
                                <input class="form-control" type="date" name="data" ">

                                <label> Data Final:  </label>
                                <input class="form-control" type="date" name="data2" "><br>

                        </div>
            </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-6">
                                <input type="submit" value="CONSULTAR" class="btn btn-success">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
<hr>
        <?
        $data = $_POST["data"];
        $data2 = $_POST["data2"];
        ?>
        <input type="button" class="btn btn-defaut" value="Exportar para Excel" onclick="location.href='excelProdutividade.php?data=<? echo $data; ?>&data2=<? echo $data2; ?>'">
        <br>
<?php include "Op_estProd.php"; ?>
<?php include "rodape.php"; ?>

