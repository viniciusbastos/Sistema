<?php
session_start(); 	//A seção deve ser iniciada em todas as páginas
if (!isset($_SESSION['usuarioID'])) {		//Verifica se há seções
    session_destroy();						//Destroi a seção por segurança
    header("Location: index.html"); exit;	//Redireciona o visitante para login
}
?>

<?php include "teste.php" ?>
<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>65 CIPM</title>
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="_css/specs.css"/>
</head>
<script language="JavaScript" src="_javascript/funcoes.js"></script>
<body>

<div id="lateral">

<header id="cabecalho">
<hgroup>
    <h1>Polícia Militar da Bahia</h1>
    <h2>Comando de Operações Policiais Militares</h2>
    <h2>Comando de Policiamento Regional Leste</h2>
    <h2>65ª Companhia Independente de Polícia Militar</h2>
    <h2><?php $usuario ?></h2>
</hgroup>
<img id="icone" src="_imagens/Sem-Título-1.png">

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

    <style>
        body
        {
            width: 1260px;
            margin: 40px auto;
        }

        /* Main menu */

        #menu
        {
            width: 100%;
            margin: 0;
            padding: 10px 0 0 0;
            list-style: none;
            background: #111;
            background: -moz-linear-gradient(#444, #111);
            background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #111),color-stop(1, #444));
            background: -webkit-linear-gradient(#444, #111);
            background: -o-linear-gradient(#444, #111);
            background: -ms-linear-gradient(#444, #111);
            background: linear-gradient(#6792f5, #314776);
            -moz-border-radius: 50px;
            border-radius: 50px;
            -moz-box-shadow: 0 2px 1px #9c9c9c;
            -webkit-box-shadow: 0 2px 1px #9c9c9c;
            box-shadow: 0 2px 1px #9c9c9c;
        }

        #menu li
        {
            float: left;
            padding: 0 0 10px 0;
            position: relative;
            line-height: 0;
        }

        #menu a
        {
            float: left;
            height: 25px;
            padding: 0 25px;
            color: #999;
            text-transform: uppercase;
            font: bold 12px/25px Arial, Helvetica;
            text-decoration: none;
            text-shadow: 0 1px 0 #000;
        }

        #menu li:hover > a
        {
            color: #fafafa;
        }

        *html #menu li a:hover /* IE6 */
{
            color: #fafafa;
        }

        #menu li:hover > ul
        {
            display: block;
        }

        /* Sub-menu */

        #menu ul
        {
            list-style: none;
            margin: 0;
            padding: 0;
            display: none;
            position: absolute;
            top: 35px;
            left: 0;
            z-index: 99999;
            background: #5274c2;
            background: -moz-linear-gradient(#314776, #6792f5);
            background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #111),color-stop(1, #444));
            background: -webkit-linear-gradient(#444, #111);
            background: -o-linear-gradient(#444, #111);
            background: -ms-linear-gradient(#314776, #6792f5);
            background: linear-gradient(#314776, #6792f5);
            -moz-box-shadow: 0 0 2px rgba(255,255,255,.5);
            -webkit-box-shadow: 0 0 2px rgba(255,255,255,.5);
            box-shadow: 0 0 2px rgba(255,255,255,.5);
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        #menu ul ul
        {
            top: 0;
            left: 150px;
        }

        #menu ul li
        {
            float: none;
            margin: 0;
            padding: 0;
            display: block;
            -moz-box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
            -webkit-box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
            box-shadow: 0 1px 0 #314776, 0 2px 0 #6792f5;
        }

        #menu ul li:last-child
        {
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        #menu ul a
        {
            padding: 10px;
            height: 10px;
            width: 130px;
            height: auto;
            line-height: 1;
            display: block;
            white-space: nowrap;
            float: none;
            text-transform: none;
        }

        *html #menu ul a /* IE6 */
{
            height: 10px;
        }

        *:first-child+html #menu ul a /* IE7 */
{
            height: 10px;
        }

        #menu ul a:hover
        {
            background: #0186ba;
            background: -moz-linear-gradient(#04acec,  #0186ba);
            background: -webkit-gradient(linear, left top, left bottom, from(#04acec), to(#0186ba));
            background: -webkit-linear-gradient(#04acec,  #0186ba);
            background: -o-linear-gradient(#04acec,  #0186ba);
            background: -ms-linear-gradient(#04acec,  #0186ba);
            background: linear-gradient(#04acec,  #0186ba);
        }

        #menu ul li:first-child > a
        {
            -moz-border-radius: 5px 5px 0 0;
            border-radius: 5px 5px 0 0;
        }

        #menu ul li:first-child > a:after
        {
            content: '';
            position: absolute;
            left: 30px;
            top: -8px;
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-bottom: 8px solid #444;
        }

        #menu ul ul li:first-child a:after
        {
            left: -8px;
            top: 12px;
            width: 0;
            height: 0;
            border-left: 0;
            border-bottom: 5px solid transparent;
            border-top: 5px solid transparent;
            border-right: 8px solid #444;
        }

        #menu ul li:first-child a:hover:after
        {
            border-bottom-color: #04acec;
        }

        #menu ul ul li:first-child a:hover:after
        {
            border-right-color: #04acec;
            border-bottom-color: transparent;
        }


        #menu ul li:last-child > a
        {
            -moz-border-radius: 0 0 5px 5px;
            border-radius: 0 0 5px 5px;
        }

        /* Clear floated elements */
        #menu:after
        {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0;
        }

    </style>





    <ul id="menu">
    <li onmouseover = "mudaFoto('_imagens/home.png')" onmouseout="mudaFoto('_imagens/Sem-Título-1.png')"><a href="index.php"> Home</a></li>

    <li onmouseover = "mudaFoto('_media/estats.png')" onmouseout="mudaFoto('_imagens/Sem-Título-1.png')"><a href="specs.html"> Estatística e Mapeamento</a>
        <ul>
            <li onmouseover = "mudaFoto('_media/OpenStreetMap-Logo.png')" onmouseout="mudaFoto('_imagens/Sem-Título-1.png')">

                <a >Mapeamento</a>
                <ul>
                    <li><a href="http://127.0.0.1:8888/test/HeatTeste.php" target="_blank">Mapa de Calor</a>
                        <ul>
                            <li>
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
                         <ul>
                             <li>
                                 <a href="#">Work 31</a></li>
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
                <a href="#">Web design</a>
                <ul>
                    <li><a href="#">Item 41</a></li>
                    <li><a href="#">Item 42</a></li>
                    <li><a href="#">Item 43</a></li>
                    <li><a href="#">Item 44</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li onmouseover = "mudaFoto('_media/police.png')" onmouseout="mudaFoto('_imagens/Sem-Título-1.png')"> <a href="form2_OPO.php"> OPO</a>
      

        <ul>
            <li><a href="index.php?link=5"> Ordem de Policiamento Ostensivo</a>


                <ul>

                    <li><a href="index.php?link=6&acao=Alterar&id=0"> Criar Ordem de Policiamento Ostensivo</a>
                        <ul>
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
                        <a href="href="index.php?link=8">work</a>
                        <ul>
                            <li>
                                <a href="#">Work 121</a>
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
            <li><a href="index.php?link=2&acao=Inserir&id=0"> Inserir Ocorrencia</a>

                <ul>
                    <li>
                        <a href="#">Work 21</a>
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
                        <a href="#">Work 22</a>
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
                        <a href="#">Work 23</a>
                        <ul>
                            <li>
                                <a href="#">Work 231</a>
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
                        <a href="#">Work 31</a>
                        <ul>
                            <li>
                                <a href="#">Work 311</a>
                            </li>
                            <li>
                                <a href="#">Work 312</a>
                            </li>
                            <li>
                                <a href="#">Work 313</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Work 32</a>
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
        </ul>
    </li>
    <li>
        <a href="#">About</a>
    </li>
    <li>
        <a href="logout.php">Logout</a>
    </li>
</ul>


<!-- AdPacks.com Ad Code -->
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>


</header>


                       <?php
                       $link = $_GET["link"];

                       $pag[1] ="List_oco.php";
                       $pag[2] ="form_Oco.php";
                       $pag[3] = "form_Efet.php";
                       $pag[4] = "form_Serv.php";
                       $pag[5] ="List_OPO_1.php";
                       $pag[6] ="List_opo.php";
                       $pag[7] ="form_OPO.html";
                       $pag[8] ="list_oco_1.php";
                       $pag[9] ="graficophp.php";
                       $pag[10] ="form_estatistica.php";

                if(!empty($link)) {
                    if (file_exists($pag[$link])) {
                        include($pag[$link]);
                    } else {
                        include($pag[0]);
                    }
                }
                else {
                    ;
                }
                       ?>



</div>




</body>

</html>