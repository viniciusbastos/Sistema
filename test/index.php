


<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
      <form method="post" action="index.php">
          Data Inicial: <input type="date" name="data">
          Data Final: <input type="date" name="data2">
          <input type="submit">
      </form>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Mapa de Homicídios e Apreensões de Armas de Fogo</title>
            <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
            <script src="js/mapas1.js"></script>
            <script src="js/markerclusterer.js"></script>


            <style>
                .infoBox { background-color: #FFF; width: 300px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; border: 2px solid #3fa7d8; border-radius: 3px; margin-top: 10px }
.infoBox p { padding: 0 15px }
.infoBox:before { border-left: 10px solid transparent; border-right: 10px solid transparent; border-bottom: 10px solid #3fa7d8; top: -10px; content: ""; height: 0; position: absolute; width: 0; left: 138px }
                </style>
                
            
  </head>

  <body onload="load()">
    <div id="map" style="width: 1280px; height: 700px"></div>
  </body>
</html>
<? include "maps_xml1.php";

?>


