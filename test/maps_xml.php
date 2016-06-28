<?php
include "teste.php";

function parseToXML($htmlStr) 
{ 
$xmlStr=str_replace('<','&lt;',$htmlStr); 
$xmlStr=str_replace('>','&gt;',$xmlStr); 
$xmlStr=str_replace('"','&quot;',$xmlStr); 
$xmlStr=str_replace("'",'&apos;',$xmlStr); 
$xmlStr=str_replace("&",'&amp;',$xmlStr); 
return $xmlStr; 
} 

$query = "SELECT * FROM `ocorrencias` WHERE 1";
$result = mysql_query($query);
if (!$result) {
  die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
while ($row = @mysql_fetch_assoc($result)){
  // ADD TO XML DOCUMENT NODE
  echo '<marker ';
  echo 'name="' . parseToXML('&','&amp;', $row['Tipo']) . '" ';
  echo 'address="' . parseToXML($row['Resumo']) . '" ';
  echo 'lat="' . $row['Latitude'] . '" ';
  echo 'lng="' . $row['Longitude'] . '" ';
  echo 'type="' . $row['CodTipo'] . '" ';
  echo '/>';
}

// End XML file
echo '</markers>';

?>