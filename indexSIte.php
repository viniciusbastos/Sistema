<?php

include "teste.php";

//ini_set('display_errors', true);
//error_reporting(E_ALL);
$user   = $_SESSION['nomeUsuario'];
$nivel  = $_SESSION['niv'];

?>

<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>65 CIPM</title>
    <link rel="shortcut icon" href="65.ico" >
    <link rel="stylesheet" type="text/css" href="_css/menus.css"/>
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="_css/specs.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>
<script language="JavaScript" src="_javascript/funcoes.js"></script>
<body>

<div class="container-fluid">

<div class="row">
    <div class="col-sm-12">

    <h2 id="cabecalho"></h2>

    <h2><?php $usuario ?></h2>

<img id="icone" src="_imagens/65.png">
    </div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
        if ($.browser.msie && $.browser.version.substr(0,1)<7)
        {
            $('li').has('ul').mouseover(function(){
                $(this).children('ul').show();
            }).mouseout(function(){
                $(this).children('ul').hide();
            })
        }
    });
</script>



    <ul id="menu">
    <li onmouseover = "mudaFoto('_imagens/65.png')" onmouseout="mudaFoto('_imagens/65.png')"><a href="index.php?link=20"> Home</a></li>

    <li onmouseover = "mudaFoto('_media/estats.png')" onmouseout="mudaFoto('_imagens/65.png')"><a href="specs.html"> Projetos</a>
        <ul>
            <li onmouseover = "mudaFoto('_media/OpenStreetMap-Logo.png')" onmouseout="mudaFoto('_imagens/65.png')">

                <a >Mapeamento</a>
                <ul>
                    <li><a href="http://65cipm.esy.es/Sitema/HeatTeste.php" target="_blank">Mapa de Calor</a>
                        <ul>
                            <li>
                                <a href="http://65cipm.esy.es/test/HeatTeste.php" target="_blank">HOMICÍDIOS</a></li>
                            <li><a href="http://65cipm.esy.es/test/mapacalorporte.php" target="_blank">PORTE ILEGAL</a>   </li>

                        </ul>
                    </li>
                    <li><a href="" target="_blank">Concentração de Pontos</a>
                        <ul>
                            <li>
                                <a href="http://127.0.0.1:8888/google/" target="_blank">HOMICÍDIOS</a></li>
                            <li><a href="http://127.0.0.1:8888/google/index2.html" target="_blank">PORTE ILEGAL</a>   </li>

                        </ul>
                    </li>
                     <li><a href="/test/" target="_blank">Mapa com ícones</a>
                         <ul>
                             <li>
                                 <a href="http://65cipm.esy.es/Sistema/projetos.html">Projeto Descentralização</a></li>
                             <li><a href="#">Work 32</a>   </li>

</ul>
</li>
                    <li><a href="#">Item 14</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Formulários</a>
                <ul>
                    <li><a href="index.php?link=2&acao=Inserir&id=0">Ocorrencias</a></li>
                    <li><a href="#">Item 22</a></li>
                    <li><a href="#">Item 23</a></li>
                    <li><a href="#">Item 24</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Gráficos</a>
                <ul>
                    <li><a href="index.php?link=9">Barras</a></li>
                    <li><a href="#">Item 32</a></li>
                    <li><a href="#">Item 33</a></li>
                    <li><a href="#">Item 34</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Oc. Administrativas</a>
                <ul>
                    <li><a href="index.php?link=19">Faltas no Período</a></li>
                    <li><a href="#">Item 42</a></li>
                    <li><a href="#">Item 43</a></li>
                    <li><a href="#">Item 44</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li onmouseover = "mudaFoto('_media/police.png')" onmouseout="mudaFoto('_imagens/65.png')"> <a href="form2_OPO.php"> OPO`s</a>
      

        <ul>
            <li><a href="index.php?link=5"> Ordem de Policiamento Ostensivo</a>


                <ul>

                    <li><a href="index.php?link=7"> Criar </a>
                        < >
                            <li>
                                <a href="index.php?link=8">work</a>
                            </li>
                            <li>
                                <a href="#">Work 112</a>
                            </li>
                            <li>
                                <a href="#">Work 113</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.php?link=5">Listar OPO</a>
                        <ul>
                            <li>
                                <a href="index.php?link=6">Work 121</a>
                            </li>
                            <li>
                                <a href="#">Work 122</a>
                            </li>
                            <li>
                                <a href="#">Work 123</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Work 13</a>
                        <ul>
                            <li>
                                <a href="#">Work 131</a>
                            </li>
                            <li>
                                <a href="#">Work 132</a>
                            </li>
                            <li>
                                <a href="#">Work 133</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href=""> Relatório do Coordenador</a>

                <ul>
                    <li>
                        <a href="index.php?link=11">Inserir</a>
                        <ul>
                            <li>
                                <a href="#">Work 211</a>
                            </li>
                            <li>
                                <a href="#">Work 212</a>
                            </li>
                            <li>
                                <a href="#">Work 213</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.php?link=12">Consultar</a>
                        <ul>
                            <li>
                                <a href="#">Work 221</a>
                            </li>
                            <li>
                                <a href="#">Work 222</a>
                            </li>
                            <li>
                                <a href="#">Work 223</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.php?link=17">Dados Estatísticos </a>
                        <ul>
                            <li>
                                <a href="index.php?link=23">Bairros</a>
                            </li>
                            <li>
                                <a href="#">Work 232</a>
                            </li>
                            <li>
                                <a href="#">Work 233</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="index.php?link=8"> Listar Ocorrencias</a>
                <ul>
                    <li>
                        <a href="#">PRODUTIVIDADE POLICIAL</a>
                        <ul>
                            <li>
                                <a href="index.php?link=22">POR PERÍODO</a>
                            </li>
                            <li>
                                <a href="index.php?link=25">POR POLICIAL</a>
                            </li>
                            <li>
                                <a href="#">Work 313</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.php?link=25">WORK</a>
                        <ul>
                            <li>
                                <a href="#">Work 321</a>
                            </li>
                            <li>
                                <a href="#">Work 322</a>
                            </li>
                            <li>
                                <a href="#">Work 323</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Work 33</a>
                        <ul>
                            <li>
                                <a href="#">Work 331</a>
                            </li>
                            <li>
                                <a href="#">Work 332</a>
                            </li>
                            <li>
                                <a href="#">Work 333</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

        <a id="logout"><? echo $user.$nivel;?></a><a href="logout.php" id="logout">Logout</a>

        </ul>



<!-- AdPacks.com Ad Code -->
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>


</header>
                            <div class="col-sm-12">
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
                       $pag[8] ="List_Oco_1.php";
                       $pag[9] ="graf.html";
                       $pag[10] ="form_estatistica.php"; 
                       $pag[11] ="form_Efet.php";
                       $pag[12] = "List_serv.php";
                       $pag[13] ="List_oco2.php";
                       $pag[14] = "form_vitima.php";
                       $pag[15] = "list_vitima.php";
                       $pag[16] = "form_arma.php";
                       $pag[17] = "form_estatistica.php";
                       $pag[18] = "form_ocorrencias_adm.php";
                       $pag[19] = "form_faltas_periodo.php";
                       $pag[21] = "form_Efet_Serv1.php";
                       $pag[22] = "form_estProd.php";
                       $pag[23] = "form_estatisticaBairros.php";
                       $pag[24] = "Produtividade.html";
                       $pag[25] = "prod_cmt.php";



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




</body>

</html>