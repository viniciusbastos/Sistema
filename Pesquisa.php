<!DOCTYPE html>
<html>

<body>
<div>
    <head>
        <style>
            h2{
                margin-bottom: 0px;
                margin-top: 0px;
            }
        </style>
        <center> <img src="_imagens/65.png" id="pmba" style="margin-bottom: 0px; margin-top: 5px"></center>
        <br>
        <h1 > SETOR DE ACOMPANHAMENTO OPERACIONAL E ESTATÍSTICA</h1>
        <h2>Pesquisa de Satisfação</h2>
        <link rel="stylesheet" type="text/css" href="_css/estiloOPO.css"/>
    </head>
<br>
    <br>



    <fieldset>
<form method="post" action="op_pesquisa.php">
 Data: <input name="data" type="date"><br>
 Tipo de Serviço :<br><select name="posto">
                <option>Barreira</option>
                <option>Patrulha</option>
                <option>Apoio</option>
               </select><br><br>
    <span class="negrito">Qualidade das Alimentações:</span><br>
    <input type="radio" name="alimentacao" value="Excelente" id="exc"><span class="azul"><label for="exc">Excelente</label></span>
    <input type="radio" name="alimentacao" value="Bom" id="bom"><span class="amarelo"><label for="bom">Bom</label></span>
    <input type="radio" name="alimentacao" value="Regular" id="reg"><span class="laranja"><label for="reg">Regular</label></span>
    <input type="radio" name="alimentacao" value="Ruim" id="ruim"><span class="red"><label for="ruim">Ruim</label></span><br><br>
    <span class="negrito">Área para Realização da Alimentação:</span><br>
    <input type="radio" name="area" value="Excelente" id="exc1"><span class="azul"><label for="exc1">Excelente</label></span>
    <input type="radio" name="area" value="Bom" id="bom1"><span class="amarelo"><label for="bom1">Bom</label></span>
    <input type="radio" name="area" value="Regular" id="reg1"><span class="laranja"><label for="reg1">Regular</label></span>
    <input type="radio" name="area" value="Ruim" id="ruim1"><span class="red"><label for="ruim1">Ruim</label></span><br><br>
    <spaN class="negrito">Estrutura dos Pontos Elevados de Observação:</spaN><br>
    <input type="radio" name="peo" value="Excelente" id="exc5"><span class="azul"><label for="exc5">Excelente</label></span>
    <input type="radio" name="peo" value="Bom" id="bom2"><span class="amarelo"><label for="bom2">Bom</label></span>
    <input type="radio" name="peo" value="Regular" id="reg2"><span class="laranja"><label for="reg2">Regular</label></span>
    <input type="radio" name="peo" value="Ruim" id="ruim2"><span class="red"><label for="ruim2">Ruim</label></span><br><br>
    <span class="negrito">Qualidade do Transporte para o Evento:</span><br>
    <input type="radio" name="qualidade" value="Excelente" id="exc2"><span class="azul"><label for="exc2">Excelente</label></span>
    <input type="radio" name="qualidade" value="Bom" id="bom3"><span class="amarelo"><label for="bom3">Bom</label></span>
    <input type="radio" name="qualidade" value="Regular" id="reg3"><span class="laranja"><label for="reg3">Regular</label></span>
    <input type="radio" name="qualidade" value="Ruim" id="ruim3"><span class="red"><label for="ruim3">Ruim</label></span><br><br>
    <span class="negrito">Cumprimento dos Horários:</span><br>
    <input type="radio" name="horario" value="Excelente" id="exc3"><span class="azul"><label for="exc3">Excelente</label></span>
    <input type="radio" name="horario" value="Bom" id="bom4"><span class="amarelo"><label for="bom4">Bom</label></span>
    <input type="radio" name="horario" value="Regular" id="reg4"><span class="laranja"> <label for="reg4">Regular</label></span>
    <input type="radio" name="horario" value="Ruim" id="ruim4"><span class="red"><label for="ruim4">Ruim</label></span><br><br>
    <span class="negrito">Limpeza dos Sanitários:</span><br>
    <input type="radio" name="Limpeza" value="Excelente" id="exc4"><span class="azul"><label for="exc4">Excelente</label></span>
    <input type="radio" name="Limpeza" value="Bom" id="bom5"><span class="amarelo"><label for="bom5">Bom</label></span>
    <input type="radio" name="Limpeza" value="Regular" id="reg5"><span class="laranja"><label for="reg5">Regular</label></span>
    <input type="radio" name="Limpeza" value="Ruim" id="ruim5"><span class="red"><label for="ruim5">Ruim</label></span><br>
    <br>
    <br>
    <input type="submit" value="Enviar" id="botao">
</form>
</fieldset>
<br>
    <br>
    <br>
</div>
<footer><h6>Desenvolvido pela Seção de Planejamento Operacional e Instrução da 65 CIPM</h6></footer>
</body>
</html>



<?php
/**
 * Created by PhpStorm.
 * User: viniciusbastos
 * Date: 22/06/15
 * Time: 17:05
 */