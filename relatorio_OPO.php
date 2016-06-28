<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estiloOPO.css"/>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
   
    <meta charset="UTF-8"/>
    <title>Ordem de Policiamento Ostensivo</title>
    <link rel="shortcut icon" href="65.ico" >
</head>
<body>
<div class="container-fluid" >
<div class="row">
  <div class="col-xl-4 col-md-4">
      _____/_______/______</br>

      _____________________</br>

      Comandante
  </div>
  <div class="col-xl-4 col-md-4">
    <center><img src="_imagens/pmba.png" class="img-responsive"></center>
    <h3> Polícia Militar da Bahia</h3>
    <h3> 65ª Companhia Independente</h3>
     
  </div>
  <div class="col-xl-4 col-md-4">
        _____/_______/______</br>

      _____________________</br>

      SubComandante   
  </div>
  </br>
</div>
<?php

   include "teste.php";


      $cod = $_GET["cod"];
      $sql = "SELECT * FROM opo WHERE opo.Cod = $cod ";
      $qry = mysqli_query($con,$sql);
    while( $res = mysqli_fetch_array($qry)) {
        
        ?>

     <p id='nome' style='font-family: arial, sans-serif; font-size: 16pt; font-weight: 600'> OPO  N 00<?=$res[1] ?> /16-SPO-<?=$res[0] ?></p></br>


<div class="row">
  <div class="col-md-8 col-md-offset-2 col-xl-8 col-xl-offset-2">
         <table class="table table-condensed" >
             <tr><td id='dir'>OPO: 00<?=$res[1] ?>/16-SPO</td>
             <td> Local do evento: <b><?=$res[2] ?></b></td> </tr>
             <tr><td id='dir'>Bairro: <b><?=$res[3] ?></b></td>
             <td>Solicitante: <b><?=$res[4] ?></br></b></td></tr>
             <tr><td id='dir'>DATA Inicial: <b> <?= date('d/m/Y', strtotime($res[5])) ?></b></br></td>
             <td>Data Final:<b><?= date('d/m/Y', strtotime($res[6])) ?></td></tr>
             <tr><td id='dir'>Horário de Inicial:<b><?= $res[7] ?></b></td>
             <td>Horário de Término: <b><?=$res[8] ?></td></tr>
             <tr><td>Uniforme:<?= $res[9] ?></td></tr>
             <tr><td id='dir'>Armamento: <b><?= $res[10] ?></b></td>
             <td>Modalidade: <b><?= $res[11] ?></b></td> </tr>
             <tr><td id='dir'>Processo:<b><?= $res[12] ?></b></td></tr>
             
         </table> 
  </div>
          <div class="col-md-8 col-md-offset-2 col-xl-8 col-xl-offset-2">
                 <table class="table table-condensed" >  
                 <tr><td>Outros Esclarecimentos:<p> <?= $res[13]; ?></p></td></tr>
                 </table>
        </div>         
         <br>
        
        <div class="col-md-12  col-xl-12">
      Viatura Empregada:<h1 style='font-size: 30px'><?= $res[14] ?></h1></br></p>
 <? }?>
       </div>

    </div>
<footer style="margin-bottom: 0px; margin-top: 4cm">
    <img src="_imagens/ass.png" style="align-content: center; margin-bottom: 0px"><br>

    VINICIUS DE OLIVEIRA BASTOS - TEN PM</br>
    Chefe da SPO &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;       Mat. 30.487.256-7</br>
<hr>
   65ª Companhia Independente de Polícia Militar, criada pela Lei nº 11356/09 de 06/01/2009</br>
    Av. Eduardo Fróes da Mota, 109 A, Sobradinho, Feira de Santana - BA. Tel: (75)3602-9111</br>
    E-Mail: cipm65.spo@gmail.com

</footer>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js" ></script>
</body>

</html>

