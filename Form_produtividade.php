<?php
$Gu_ServID = $_GET["Gu_ServID"];
$id_Serv = $_GET["id_Serv"];
include "teste.php";
?>








<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

    <link rel="stylesheet" type="text/css" href="/produtividade/estilos/estilos.css">

    <script type="text/javascript" src='/produtividade/dwr/interface/DwrService.js'></script>
    <script type="text/javascript" src='/produtividade/dwr/engine.js'></script>
    <script type="text/javascript" src='/produtividade/dwr/util.js'></script>
    <script type="text/javascript" src='/produtividade/javascript/telaGenerico.js'></script>
    <script type="text/javascript" src='/produtividade/javascript/dwrUtil.js'></script>
    <script type="text/javascript" src='/produtividade/javascript/telaManutencao.js'></script>
    <script type="text/javascript" src='/produtividade/javascript/default.js'></script>
    <link rel="stylesheet" type="text/css" href="/produtividade/estilos/calendar.css">
    <script type="text/javascript" src="/produtividade/javascript/calendar.js"></script>



    <title>Inserir Produtividade Policial</title>
    <link rel="stylesheet" type="text/css" href="_css/produtividade.css"/>



</head>

<body>

<form action="Op_Prod.php" method="post" name="frmPadrao" >

    <input type="hidden" name="acao" value="CONFNOVO">
    <input type="hidden" name="acaoAnterior" value="CONFNOVO">
    <input name="codigo" value="" type="hidden">





    <br/>

    <table width="960" cellpadding="5" cellspacing="0" class="cadastro">
        <caption>Dados da Produtividade Policial</caption>
        <caption>Dados Quantitativos Abordagem, Prisão e Apreensão</caption>
        <tbody>
        <tr>
            <td width="160">Pessoas Abordadas </td>
            <td width="320" ><input name="numPessoasAbordadas" maxlength=3 value="0"></td>
            <td width="160">Estabelecimentos Abordados </td>
            <td width="320" ><input name="numEstabelecimentosAbordados" maxlength=3  value="0" ></td>
        </tr>
        <tr>
            <td width="160">Pessoas Conduzidas a CP </td>
            <td width="320" ><input name="numPessoasConduzidasCP" maxlength=3  value="0" ></td>
            <td width="160">Presos Flagrante Delito </td>
            <td width="320" ><input name="numPresosFlagranteDelito" maxlength=3  value="0" ></td>
        </tr>
        <tr>
            <td width="160">Adolescentes Apreendidos</td>
            <td width="320" ><input name="numAdolescentesApreendidos" maxlength=3  value="0" ></td>
            <td width="160">TCO Lavrados </td>
            <td width="320" ><input name="numTCOLavrados" maxlength=3  value="0" ></td>
        </tr>
        <tr>
            <td width="160">Auto Resistência Lavrado </td>
            <td width="320" ><input name="numAutoResistenciaLavrado" maxlength=3  value="0" ></td>
            <td width="160">Mandados Prisão Cumpridos</td>
            <td width="320" ><input name="numMandadosPrisaoCumpridos" maxlength=3  value="0" ></td>
        </tr>
        <tr>
            <td width="160">Armas de Fogo Apreendidas </td>
            <td width="320" ><input name="numArmasFogoApreendidas" maxlength=1  value="0" ></td>
            <td width="160">Armas Brancas Apreendidas</td>
            <td width="320" ><input name="numArmasBrancasApreendidas" maxlength=1  value="0" ></td>
        </tr>
        <tr>
            <td width="160">Veículos Quatro Rodas Abordados</td>
            <td width="320" ><input name="numVeiculos4RodasAbordados" maxlength=3  value="0" ></td>
            <td width="160">Veículos Duas Rodas Abordados</td>
            <td width="320" ><input name="numVeiculos2RodasAbordados" maxlength=3  value="0" ></td>
        </tr>
        <tr>
            <td width="160">Veículos Transporte Coletivo Abordados</td>
            <td width="320" ><input name="numVeiculosTransporteColetivoAbordados" maxlength=3  value="0" ></td>
            <td width="160">Ponto de Ônibus Abordados</td>
            <td width="320" ><input name="numPontosOnibusAbordados" maxlength=3  value="0" ></td>
        </tr>
        <tr>
            <td width="160">Veículos Recuperados</td>
            <td width="320" ><input name="numVeiculosRecuperados" maxlength=3  value="0" ></td>
            <td width="160">Veículos Quatro Rodas Autuados</td>
            <td width="320" ><input name="numVeiculos4RodasAutuados" maxlength=3  value="0" ></td>
        </tr>
        <tr>
            <td width="160">Veículos Duas Rodas Autuados</td>
            <td width="320" ><input name="numVeiculos2RodasAutuados" maxlength=3  value="0" ></td>
            <td width="160">Veículos Quatro Rodas Apreendidos</td>
            <td width="320" ><input name="numVeiculos4RodasApreendidos" maxlength=3  value="0" ></td>
        </tr>
        <tr>
            <td width="160">Veículos Duas Rodas Apreendidos</td>
            <td width="320" ><input name="numVeiculos2RodasApreendidos" maxlength=3  value="0" ></td>
            <td width="160">Veículos Transporte Coletivo Apreendidos</td>
            <td width="320" ><input name="numVeiculosTransporteColetivoApreendidos" maxlength=3  value="0" ></td>
        </tr>
        <tr>
            <td width="160">Taxi Abordados</td>
            <td width="320" ><input name="numTaxiAbordados" maxlength=3  value="0" ></td>
            <td width="160">CNH Apreendidas</td>
            <td width="320" ><input name="numCNHApreendidas" maxlength=3  value="0" ></td>
        </tr>
        </tbody>
    </table>
    <table width="960" cellpadding="5" cellspacing="0" class="cadastro">
        <caption>Dados Quantitativos Drogas</caption>
        <tbody>

        <tr>
            <td width="160">Maconha Apreendida (Nº de Ocorrências)</td>
            <td width="800" ><input name="numMaconhaApreendidaemKg" maxlength=1  value="0" ></td>
            <td width="160">Maconha Apreendida (Nº de Papelotes)</td>
            <td width="800" ><input name="numMaconhaApreendidaPapelote" maxlength=1  value="0" ></td>
        </tr>
        <tr>
            <td width="160">Cocaína Apreendida (Nº de Ocorrências)</td>
            <td width="800" ><input name="numCocainaApreendidaemGramas" maxlength=1  value="0" ></td>
        </tr>
        <tr>
            <td width="160">Crack Apreendido (Nº de Ocorrências)</td>
            <td width="800" ><input name="numCrackApreendidaemGramas" maxlength=1 value="0" ></td>
            <td width="160">Crack Apreendido (Nº de Pedras)</td>
            <td width="800" ><input name="numCrackApreendidaemPedras" maxlength=1 value="0" ></td>
        </tr>
        <tr>
            <td width="160">Outras Drogas Apreendidas (Nº de Ocorrências)</td>
            <td width="800" ><input name="numOutrasdrogasapreendidas" maxlength=1  value="0" ></td>
        </tr>
        </tbody>
    </table>

    <p>
        <input type="submit" id="btnOk" name="btnOk" value="Confirmar" ">
        <input type="hidden" name="Gu_ServID" value="<? echo $Gu_ServID ?>">
        <input type="hidden" name="id_Serv" value="<? echo $id_Serv  ?>">

    </p>

</form>

</body>

</html>







</form>

</body>
</html>

