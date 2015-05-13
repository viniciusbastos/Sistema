<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estiloOPO.css"/>
    <meta charset="UTF-8"/>
    <title>Ordem de Policiamento Ostensivo</title>

</head>
<body>
<div>
    <hgroup id="cabecalho">
        <h1>POLÍCIA MILITAR DA BAHIA</h1>
        <h2>COMANDO DE OPERAÇÕES POLICIAIS MILITARES</h2>
        <h2>COMANDO DE POLICIAMENTO REGIONAL LESTE</h2>
        <h2>65ª COMPANHIA INDEPENDENTE DE POLÍCIA MILITAR</h2>
    </hgroup>
<?php
/**
 mysql_query(query, connection)
 * INSERT INTO nome_tabela (campos) VALUES (valores)
 *
 */
   include "teste.php";
//criaçao de tabela mysql
 $n = isset($_GET["Data"])?$_GET["Data"]:"Não foi possivel exibir";

  $sql = "SELECT * FROM `OPO` WHERE DATA = '$n' ";
  $qry = mysql_query($sql);
  $res = mysql_fetch_array($qry);

echo "<p id='nome'>"."OPO  N 00".$res[1]."/15-SPOI     - ".$res[0]."</br>"."</p>";
echo "<p id='numero'>"."OPO: 00".$res[1]."/15-SPOI"."</br>"."</p>";
echo "<p id='local'>"."Local do evento: ".$res[2]."</br>"."</p>";
echo "<p id='bairro'>"."Bairro: ".$res[3]."</br>"."</p>";
echo "<p id='Soli'>"."Solicitante: ".$res[4]."</br>"."</p>";
echo "<p id='data'>"."DATA: ".date('d/m/Y', strtotime($res[5]))."</br>"."</p>";
echo "<p id='hri'>"."Horário de Inicial: ".$res[6]."</br>"."</p>";
echo "<p id='hrf'>"."Horário de Término: ".$res[7]."</br>"."</p>";
echo "<p id='uni'>"."Uniforme: ".$res[8]."</br>"."</p>";
echo "<p id='arm'>"."Armamento: ".$res[9]."</br>"."</p>";
echo "<p id='modalidade'>"."Modalidade: ".$res[10]."</br>"."</p>";
echo "<p id='processo'>"."Processo  :  ".$res[11]."</br>"."</p>";
echo "<p id='otr'>"."Outros Esclarecimentos: ".$res[12]."</br>"."</p>";
echo "<p id='vtr'>"."Viatura Empregada: ".$res[13]."</br>"."</p>";
?>
        <p id="assinatura">
            VINICIUS DE OLIVEIRA BASTOS - TEN PM</br>
            Chefe da SPOI</br>
        </p>
        <p id="rodape">   65ª Companhia Independente de Polícia Militar, criada pela Lei nº 11356/09 de 06/01/2009</br>
            Av. Eduardo Fróes da Mota, 109 A, Sobradinho, Feira de Santana - BA. Tel: (75)3602-9111</br>
            E-Mail: cipm65.spo@gmail.com
        </p>

    </div>
</body>

</html>

