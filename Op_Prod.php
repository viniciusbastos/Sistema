<?php
include "teste.php";

$id_Serv                = $_POST["id_Serv"];
$gu_Serv                = $_POST["Gu_ServID"];
$pessoas                = $_POST["numPessoasAbordadas"] ;
$estabelecimentos       = $_POST["numEstabelecimentosAbordados"];
$pessoasCP              = $_POST["numPessoasConduzidasCP"];
$presosFlagrante        = $_POST["numPresosFlagranteDelito"];
$adolecentesApreendido  = $_POST["numAdolescentesApreendidos"];

$tco                    = $_POST["numTCOLavrados"];

$autoRes                = $_POST["numAutoResistenciaLavrado"];
$Mandados               = $_POST["numMandadosPrisaoCumpridos"];
$ArmasFogoApreendidas    = $_POST["numArmasFogoApreendidas"];

$ArmasBrancasApreendida = $_POST["numArmasBrancasApreendidas"];
$Veiculos4R             = $_POST["numVeiculos4RodasAbordados"];
$Veiculos2R             = $_POST["numVeiculos2RodasAbordados"];
$VeiculosTransporte     = $_POST["numVeiculosTransporteColetivoAbordados"];
$PontosOnibusA          = $_POST["numPontosOnibusAbordados"];
$VeiculosRecuperados    = $_POST["numVeiculosRecuperados"];
$Veiculos4RodasA        = $_POST["numVeiculos4RodasAutuados"];
$Veiculos2RodasA        = $_POST["numVeiculos2RodasAutuados"];
$Rodas4Apreendidos      = $_POST["numVeiculos4RodasApreendidos"];
$Rodas2Apreendidos      = $_POST["numVeiculos2RodasApreendidos"];
$TransporteColetivo     = $_POST["numVeiculosTransporteColetivoApreendidos"];
$CNHApreendidas         = $_POST["numCNHApreendidas"];
$MaconhaApreendida      = $_POST["numMaconhaApreendidaemKg"];
$CocainaApreendida      = $_POST["numCocainaApreendidaemGramas"];
$CrackApreendida        = $_POST["numCrackApreendidaemGramas"];
$Outrasdrogas           = $_POST["numOutrasdrogasapreendidas"];
$CrackApreendidaPedras  = $_POST["numCrackApreendidaemPedras"];
$MaconhaApreendidaPape  = $_POST["numMaconhaApreendidaPapelote"];


echo $gu_Serv;
// Estas linhas mostram como ver quais variáveis foram definidas através de POSTs bem como seus valores.

// O array $X armazena os valores de cada variável de $_POST.
$X = $_POST;

// $VAR guarda o nome de cada variável e cada valor de $X é passado
// para $VALUE na ordem das variáveis.
foreach ( $X as $VAR => $VALUE) {

// Imprime o nome da variável e seu respectivo valor.
    print "$VAR = $VALUE<p>";

}


// Sempre comente seus scripts, evita dor de cabeça para você e para todos.
$sql2 ="INSERT INTO `tbresumoestatistico`(`Gu_Serv`, `Pessoas abordadas`, `Estabelecimentos  abordados`, `Pessoas conduzidas a CP`, `Presos em flagrantes`, `Adolescentes infratores`, `TCO_lavrados`, `Auto de resistência lavrado`, `Mandados de prisão cumprido`, `Armas de fogo apreendidas`, `Armas brancas apreendidas`, `Automóveis abordados`, `Motos abordadas`, `Ônibus abordados`, `Pontos de ônibus abordados`, `Veículos recuperados`, `Veículos autuados`, `Motos autuados`, `Veículos apreendidaos`, `Motos  apreendidas`, `Ônibus apreendido`, `CNH apreendidas`, `Maconha  apreendida`, `Cocaína apreendida`, `Crack apreendida`, `Outras drogas apreendidas`,`Maconha_Papelotes`, `Crack_Pedras`) VALUES ($gu_Serv,$pessoas,$estabelecimentos,$pessoasCP,$presosFlagrante,$adolecentesApreendido,$tco,$autoRes,
  $Mandados,$ArmasFogoApreendidas,$ArmasBrancasApreendida,$Veiculos4R,$Veiculos2R,$VeiculosTransporte,
  $PontosOnibusA,$VeiculosRecuperados,$Veiculos4RodasA,$Veiculos2RodasA,$Rodas4Apreendidos,
  $Rodas2Apreendidos,$TransporteColetivo,$CNHApreendidas,$MaconhaApreendida,$CocainaApreendida,$CrackApreendida,
  $Outrasdrogas, $MaconhaApreendidaPape, $CrackApreendidaPedras )";
mysql_query($sql2);
echo mysql_error($link);

echo "<script type = 'text/JavaScript'> location.href ='index.php?link=21&id=$id_Serv'</script> "


?>