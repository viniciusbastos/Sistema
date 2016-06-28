<?php
require('fpdf181/fpdf.php');

$pdf = new FPDF("P","pt","A4");
$pdf->AddPage();
$pdf->SetXY(25, 25);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(320,10,utf8_decode('Relatório de Serviço'),0,1);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(320,10,utf8_decode('65 CIPM'),0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(65,10,utf8_decode('Matrícula'),1,0);
$pdf->Cell(60,10,utf8_decode('Posto/Grad'),1,0);
$pdf->Cell(230,10,utf8_decode('Nome'),1,0);
$pdf->Cell(80,10,utf8_decode('Posto'),1,0);

$pdf->Cell(40,10,utf8_decode('Obs'),1,0);
$pdf->Cell(40,10,utf8_decode('Obs'),1,1);

    include "teste.php";

$data   = $_GET["data"];
$data2  = $_GET["data2"];

$sql ="SELECT tbcargo.POSTO_GRAD,TbEfetivoPM.MAT, TbEfetivoPM.NOME, Faltas.Post_serv, Faltas.Justificativa, tbServ.data, Faltas.obs FROM `Faltas` INNER JOIN `TbEfetivoPM` ON Faltas.Mat = TbEfetivoPM.mat INNER JOIN `tbcargo` ON TbEfetivoPM.CARGO = tbcargo.CARGOId INNER JOIN `tbServ` ON Faltas.id_Serv = tbServ.id WHERE tbServ.data BETWEEN '$data' AND '$data2'" ;
$qry = mysql_query($sql);

while($resultado = mysql_fetch_array($qry)) {

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(65, 20, utf8_decode($resultado[1]), 1, 0);
    $pdf->Cell(60, 20, utf8_decode($resultado[0]), 1, 0);
    $pdf->Cell(230, 20, utf8_decode($resultado[2]), 1, 0);
    $pdf->Cell(80, 20, utf8_decode($resultado[3]), 1, 0);
    $pdf->Cell(160, 20, utf8_decode($resultado[4]), 1, 1,'c');
}


$pdf->Output();
?>