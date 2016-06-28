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

<div id="interface">

    <header id="cabecalho">
        <hgroup>
            <h1>Polícia Militar da Bahia</h1>
            <h2>Comando de Operações Policiais Militares</h2>
            <h2>Comando de Policiamento Regional Leste</h2>
            <h2>65ª Companhia Independente de Polícia Militar</h2>
            <h2><?php $usuario
                ?></h2>
        </hgroup>
        <img id="icone" src="_imagens/Sem-Título-1.png">


        <nav id="menu">
            <h1 >Menu Principal</h1>
            <ul>
                <li onmouseover = "mudaFoto('_imagens/home.png')" onmouseout="mudaFoto('_imagens/Sem-Título-1.png')"><a href="index.html"> Home</a></li>
                <li onmouseover = "mudaFoto('_imagens/especificacoes.png')" onmouseout="mudaFoto('_imagens/Sem-Título-1.png')"><a href="specs.html"> Produtividade</a></li>
                <li onmouseover = "mudaFoto('_imagens/fotos.png')" onmouseout="mudaFoto('_imagens/Sem-Título-1.png')"><a href="fotos.html"> NORMATIZAÇÃO</a></li>
                <li onmouseover = "mudaFoto('_imagens/multimidia.png')" onmouseout="mudaFoto('_imagens/Sem-Título-1.png')"><a href="multimidia.html"> QUEM SOMOS NÓS </a></li>
                <li onmouseover = "mudaFoto('_imagens/contato.png')" onmouseout="mudaFoto('_imagens/Sem-Título-1.png')"> <a href="form2_OPO.php"> OPO</a></li>
            </ul>
        </nav>
    </header>
     <form method="post" action="form_OPO.php">

        <p> Nome:           <input type="text" placeholder="Digite O nome do evento" id="Nome" name="Nome">
        </p>
         <p>Local do evento:<input type="text" placeholder="Local do Evento" id="Local" name="Local">
         </p>

         <?php $query = mysqli_query($con,"SELECT * FROM `tipo de ocorrencias`");
         $query2 = mysqli_query($con,"SELECT * FROM `BAIRROS`");
         ?>
         <p>bairro <select style=width:200px name="bairro" value="bairro"></br>
             <?php while($prod2 = mysqli_fetch_array($query2)) { ?>
             <option> <?php echo $prod2[0]; ?></option>
             <?php } ?></select>
         </p>
         <p>Solicitante:<input type="text" id="Solicitante" name="Solicitante">
         </p>
        <p>DATA:<input type="date" id="data" name="data">
        </p>
         <p>Horário de Inicial:<input type="datetime" id="hr_inicial" name="hr_inicial">
         </p>
         <p>Horário de Término:<input type="datetime" id="hr_termino" name="hr_termino">
         </p>
         <p>Uniforme:<select name="uni" id="uni">
                  <optgroup label="Uniforme">
                  <option>8 Uniforme</option>
                  <option>8a Uniforme</option>
                  </optgroup>
                  </select>
         </p>
         <p>Armamento:<select name="arm" id="arm">
                     <optgroup label="Armamento">
                         <option>Pistola .40</option>
                         <option>Pistola .380</option>
                    </optgroup>
                  </select>
         </p>
         <p>Modalidade:<select name="modalidade" id="modalidade">
                     <optgroup label="Modalidades">
                         <option>Patrulhamento</option>
                         <option></option>
                     </optgroup>
                     </select>


         </p>
         <p>Processo: <select name="processo" id="processo">
                    <optgroup label="processo">
                        <option>A pé</option>
                        <option>Motorizado</option>
                     </optgroup>
                    </select>
         </p>

         <p>Viatura:<input type="text" id="vtr" name="vtr">
         </p>
         <p>Outros Esclarecimentos:         </p>
         <textarea name="OtrEsclarecimentos"rows="4" cols="130" style="margin-left: 40px"></textarea>
         <input type="image" src="botao-enviar.png" name="tenviar">
     </form>

</div>
</body>
</html>