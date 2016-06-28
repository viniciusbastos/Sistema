<?php
include_once('teste.php');

 $arquivo = 'dados_produtividade.xls';

$tabela = '<table border="0">';
$tabela .= '<tr>';
$tabela .= '<td colspan="2">Tabela de Ocorrencias</tr>';
$tabela .= '</tr>';
$tabela .= '<tr>';
$tabela .= '<td><b>Tipo</b></td>';
$tabela .= '<td><b>Bairro</b></td>';
$tabela .= '<td><b>Resumo</b></td>';
$tabela .= '<td><b>Horario</b></td>';
$tabela .= '<td><b>Logradouro</b></td>';



$tabela .= '</tr>';

// Puxando dados do Banco de dados
$resultado = mysqli_query($con,'SELECT * FROM `ocorrencias` ');

while($dados = mysqli_fetch_array($resultado)) {
    $tabela .= '<tr>';

    $tabela .= '<td>' . $dados[2] . '</td>';
    $tabela .= '<td>' . $dados[4] . '</td>';
    $tabela .= '<td>' . $dados[5] . '</td>';
    $tabela .= '<td>' . $dados[6] . '</td>';
    $tabela .= '<td>' . $dados[7] . '</td>';

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