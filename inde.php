

<?php

    include "teste.php";

    ini_set('display_errors', true);
    error_reporting(E_ALL);

?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>65 CIPM</title>
    <link rel="shortcut icon" href="65.ico" >
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
        #topo {
            background: #ccc;
            padding-bottom: 10px;
            padding-top: 10px;
        }
        #corpo {
            margin-top: 10px;
            margin-bottom: 10px;
        }
        #rodape {
            background: #999;
            padding-bottom: 10px;
            padding-top: 10px;
        }
    </style>
</head>
<script language="JavaScript" src="_javascript/funcoes.js"></script>
<body>

        <div class="container">
         <div class="row" id="topo">
            <div class="span12">
            <h2>Sistema Interoperativo das Seçoes</h2>

            </div>

    <h2><?php $usuario ?></h2>

        </div>




<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>


<div class="row" id="corpo">

    <div class="span3" style="background: #4f4f4f">
    <ul id="menu">
    <li><a href="bootstrap/index.php?link=20"> Home</a></li></ul>


    <div class="dropdown clearfix">
    <ul class="dropdown-menu" role="menu" aria-labelledby="bottom:5px; *width:180px">
    <li><a> Estatística e Mapeamento</a></li>
   <li><a href="http://127.0.0.1:8888/sitema/HeatTeste.php" target="_blank">Mapa de Calor</a>
            </li></ul>

            </div>
                                <a href="http://127.0.0.1:8888/test/HeatTeste.php" target="_blank">HOMICÍDIOS</a></li>
                            <li><a href="http://127.0.0.1:8888/test/mapacalorporte.php" target="_blank">PORTE ILEGAL</a>   </li>

                        </ul>
                    </li>
                    <li><a href="" target="_blank">Concentração de Pontos</a>
                        <ul>
                            <li>
                                <a href="http://127.0.0.1:8888/google/" target="_blank">HOMICÍDIOS</a></li>
                            <li><a href="http://127.0.0.1:8888/google/index2.html" target="_blank">PORTE ILEGAL</a>   </li>

                        </ul>
                    </li>
                     <li><a href="http://127.0.0.1:8888/test/" target="_blank">Mapa com ícones</a>

</li>
                    
                </ul>
            </li>
            <li>
                <a href="#">Formulários</a>
                <ul>
                    <li><a href="bootstrap/index.php?link=2&acao=Inserir&id=0">Ocorrencias</a></li>

                </ul>
            </li>
            <li>
                <a href="#">Gráficos</a>
                <ul>
                    <li><a href="bootstrap/index.php?link=9">Barras</a></li>

                </ul>
            </li>
            <li>
                <a href="#">Oc. Administrativas</a>
                <ul>
                    <li><a href="bootstrap/index.php?link=19">Faltas no Período</a></li>

                </ul>
            </li>
        </ul>
    </li>
    <li> <a href="form2_OPO.php"> OPO`s</a>
      

        <ul>
            <li><a href="bootstrap/index.php?link=5"> Ordem de Policiamento Ostensivo</a>


                <ul>

                    <li><a href="bootstrap/index.php?link=7"> Criar </a>
                        < >
                            <li>
                                <a href="bootstrap/index.php?link=8">work</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="bootstrap/index.php?link=5">Listar OPO</a>
                        <ul>
                            <li>
                                <a href="bootstrap/index.php?link=6">Work 121</a>
                            </li>

                        </ul>
                    </li>


                    </li>
                </ul>
            </li>
            <li><a href=""> Relatório do Coordenador</a>

                <ul>
                    <li>
                        <a href="bootstrap/index.php?link=11">Inserir</a>

                    </li>
                    <li>
                        <a href="bootstrap/index.php?link=12">Consultar</a>

                    </li>
                    <li>
                        <a href="http://localhost:8888/Sistema/index.php?link=17">Dados Estatísticos </a>
                        <ul>
                            <li>
                                <a href="http://localhost:8888/Sistema/index.php?link=23">Bairros</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="bootstrap/index.php?link=8"> Listar Ocorrencias</a>
                <ul>
                    <li>
                        <a href="#">PRODUTIVIDADE POLICIAL</a>
                        <ul>
                            <li>
                                <a href="bootstrap/index.php?link=22">POR PERÍODO</a>
                            </li>

                        </ul>
                    
                </ul>
            </li>

        <a href="logout.php" id="logout">Logout</a>


        </ul>



<!-- AdPacks.com Ad Code -->
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>

</div>

         <div class="span9">

                       <?php
                       $link = $_GET["link"];


                       $pag[20] = "paginaPrincipal.html";
                       $pag[1] ="List_oco.php";
                       $pag[2] ="form_Oco.php";
                       $pag[3] = "form_Efet.php";
                       $pag[4] = "form_Serv.php";
                       $pag[5] ="List_OPO_1.php";
                       $pag[6] ="List_opo.php";
                       $pag[7] ="form_OPO1.php";
                       $pag[8] ="list_oco_1.php";
                       $pag[9] ="graf.html";
                       $pag[10] ="form_estatistica.php"; 
                       $pag[11] ="form_efet.php";
                       $pag[12] = "list_serv.php";
                       $pag[13] ="List_oco2.php";
                       $pag[14] = "form_vitima.php";
                       $pag[15] = "list_vitima.php";
                       $pag[16] = "form_arma.php";
                       $pag[17] = "form_estatistica.php";
                       $pag[18] = "form_ocorrencias_adm.php";
                       $pag[19] = "form_faltas_Periodo.php";
                       $pag[21] = "form_Efet_Serv1.php";
                       $pag[22] = "form_estProd.php";
                       $pag[23] = "form_estatisticaBairros.php";
                       $pag[24] = "Produtividade.html";


                       if(!empty($link)) {
                    if (file_exists($pag[$link])) {
                        include($pag[$link]);
                    } else {
                        include($pag[20]);
                    }
                }
                else{
                }
                       ?>

</div>
</div>
</div>




</body>

</html>