<html>
<head>
    <meta charset="utf-8" />
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="./_css/specs.css" type="text/css" />
    <style type="text/css">
        a{
            display: block;
            background-color: #5274c2;
            color: #ffffff;
            width: 40px;
            padding: 3px;
            text-decoration: blink;
        }
    </style>
</head>
<body>
<h2>Quantidade de Ocorrencias por Período</h2>


<table border="1" style="border-spacing: 0px; border: 1px solid #000000 ">
    <tr>
        <th>Tipo do Fato</th>
        <th>Qtd</th>
        <th>Frequencia Relativa</th>
        <th>Frequencia Relativa Acumulada</th>
        <th>Frequencia Acumulada</th>
    <tr>
        <?php
        $fr2 = 0;
        $fra = 0 ;
        $fr = 0 ;
        include "teste.php";
        $data = $_POST["data"];
        $data2 = $_POST["data2"];
        $tipo = $_POST["tipo"];
        $hrini =$_POST["hr_ini"];
        $hrfim =$_POST["hr_fim"];
        $bairro =$_POST["bairro"];

        if($bairro == "TODOS"){
            $bairro = "%";

        }
        if($tipo == "TODOS"){
            $tipo = "%";

        }



        $sql = "SELECT `tipo`, COUNT(`tipo`), `Latitude`,`Longitude` FROM `ocorrencias` WHERE `Tipo` LIKE '$tipo' AND `Bairro` LIKE '$bairro' AND `Data` BETWEEN '$data' AND '$data2' AND `horario` BETWEEN '$hrini' AND '$hrfim' GROUP BY `tipo` ORDER BY COUNT(`tipo`) DESC";
        $qry = mysql_query($sql) or die ("nao foi possivel inserir os dados");
        $qry2 = mysql_query($sql)
        ?>
        <?php while($res2 = mysql_fetch_array($qry2))  { ?>
            <?php $fr = $fr + $res2[1]  ?>
        <?php } ?>
        <?php while($res = mysql_fetch_array($qry))  { ?>

    <tr>
        <td><?php echo $res[0]; ?> </td>
        <td> <?php echo $res[1]; ?>   </td>
        <td>  <?php echo number_format(($res[1]/$fr*100),2,",",".")."%"; ?>  </td>

       <td><?php

       echo number_format($fr2 = (($res[1]/$fr*100) + $fr2),2)."%"; ;
       ?></td>
        <td> <?php echo $fra = $fra + $res[1]; ?></td>
    </tr>
    <?php } ?>
</table>
    <a href="form_estatistica.php">Voltar</a>
    </body>
</html>