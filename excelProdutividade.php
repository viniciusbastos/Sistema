<?php
include_once('teste.php');


 $arquivo = 'dados_produtividade.xls';

$tabela = '<table border="0">';
$tabela .= '<tr>';
$tabela .= '<td colspan="2">Tabela de Ocorrencias</tr>';
$tabela .= '</tr>';
$tabela .= '<tr>';
$tabela .= '<td><b>PEL</b></td>';
$tabela .= '<td><b>GU</b></td>';
$tabela .= '<td><b>PESSOAS ABORDADAS</b></td>';
$tabela .= '<td><b>PRESOS EM FLAGRANTE</b></td>';
$tabela .= '<td><b>ARMAS DE FOGO APREENDIAS</b></td>';
$tabela .= '<td><b>PESSOAS CONDUZIDAS</b></td>';
$tabela .= '<td><b>VEICULOS RECUPERADOS</b></td>';



$tabela .= '</tr>';

// Puxando dados do Banco de dados
$data   = $_GET["data"];
$data2  = $_GET["data2"];
$sql = "SELECT GU_SERV.PEL, GU_SERV.GU, SUM(`Pessoas abordadas`), SUM(`Presos em flagrantes`), SUM(`Armas de fogo apreendidas`), SUM(`Pessoas conduzidas a CP`), SUM(`Veículos recuperados`), SUM(tbresumoestatistico.Maconha_Papelotes) FROM `tbresumoestatistico` INNER JOIN GU_SERV ON tbresumoestatistico.Gu_Serv = GU_SERV.Id INNER JOIN tbServ ON tbServ.id = GU_SERV.id_Serv WHERE tbServ.data BETWEEN '$data' AND '$data2' GROUP BY GU_SERV.PEL, GU_SERV.GU";
$qry = mysqli_query($con, $sql) or die (mysqli_error($con));

while($dados = mysqli_fetch_array($qry))  {
    $tabela .= '<tr>';

    $tabela .= '<td>' . $dados[0] . '</td>';
    $tabela .= '<td>' . $dados[1] . '</td>';
    $tabela .= '<td>' . $dados[2] . '</td>';
    $tabela .= '<td>' . $dados[3] . '</td>';
    $tabela .= '<td>' . $dados[4] . '</td>';
    $tabela .= '<td>' . $dados[5] . '</td>';
    $tabela .= '<td>' . $dados[6] . '</td>';


    $tabela .= '</tr>';
         }
$tabela .= '</table>';

// Força o Download do Arquivo Gerado
header ('Cache-Control: no-cache, must-revalidate');
header ('Pragma: no-cache');
header('Content-Type: application/x-msexcel');
header ("Content-Disposition: attachment; filename=\"{$arquivo}\"");
echo $tabela;
?>