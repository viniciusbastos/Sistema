<?php


include "teste.php";
include "funcoes.php";
//criaçao de tabela mysql
$id     = $_GET["id"];
$acao   = $_GET["acao"];
$form   = $_GET["form"];

$sql        = "SELECT * FROM `ocorrencias` WHERE `id` = $id";
$qry        = mysqli_query($con, $sql);
$row        = mysqli_fetch_array($qry);
$query      = mysqli_query($con,"SELECT * FROM `tipo de ocorrencias` ORDER BY `tipo de ocorrencias`.`Servico` ASC");
$query3     = mysqli_query($con,"SELECT `Viaturas` FROM `viaturas` WHERE 1");

?>

<!DOCTYPE html>
<html>
<head lang="pt-br">
    <meta charset="UTF-8">
    <title>Formulário de Ocorrencias</title>
</head>
<body>
    <form style="margin-left: 10px" action="Op_oco.php" method="post">

        <fieldset  id="Informaçoes Gerais"><legend>Informaçoes Gerais</legend>

        <input type="hidden" name="serv" value="<?php echo $id ?>"></br>
        Tipo: <select style=width:230px:margin-left:200px; name="tipo" value="<?php echo $tipo ?>"></br>
            <?php while($prod = mysqli_fetch_array($query)) { ?>
                <option> <?php echo $prod[0]; ?></option>
            <?php } ?>
        </select>
            <br>
            <br>

            Inciativa da Ocorrencia: <br>
            <input type='radio' name="iniciativa" value='Pm'>Iniciativa do PM<br>
            <input type='radio' name="iniciativa" value='CICOM'>CICOM<br>
            <input type='radio' name="iniciativa" value='Direito'>Direto ao Policial
        </fieldset>
        </br>



        </br>


        <fieldset  id="Local"><legend>Local, Data e Horario</legend>

            Bairro: <? bairro() ?>

        Data: <input type="date" name="data" value="<?php echo $row['Data'] ?>">
        Horario: <input type="time" name="hr" value="<?php echo $row['horario'] ?>"> <br><br>

        Local: <input style="width: 200px" class="esque" type="text" name="local" value="<?php echo $row['Local'] ?>" ></br>
        Iluminação da Via:<br>
        <input type="radio" name="iluminacao" value="Presente">Boa Iluminação<br>
        <input type="radio" name="iluminacao" value="Prejudicada">Iluminação Prejudicada<br>
        <input type="radio" name="iluminacao" value="Ausente">Ausente<br>
            <input type="radio" name="iluminacao" value="Não Informado">Não Informado<br>

        Pavimentação da Via:<br>
        <input type="radio" name="pavimentacao" value="asfaltica">Asfaltica<br>
        <input type="radio" name="pavimentacao" value="Prejudicada">Paralelepipedo<br>
        <input type="radio" name="pavimentacao" value="Ausente">Ausente<br>
            <input type="radio" name="pavimentacao" value="Não Informado">Não Informado<br>

        </fieldset>
        </br>
        <fieldset  id="Informaçoes Específicas"><legend>Informaçoes Específicas</legend>

            Resumo:</br>
            <textarea name="resumo" rows="6" cols="110"><?php echo $row['Resumo'] ?></textarea></br>

        
        <p>
        <label for="endereco" class="required">Digite o Local da ocorrencia:
            <input name="endereco" id="endereco" class="text" type="text">
        <p>
            <input class="btn btn-default" id="btn-get-coordinates" value="Pegar Coordenadas" type="button">
        </label>

            <div class="form-inline">
                <label for="latitude">Latitude</label><input name="latitude" id="latitude" class="input-xlarge" placeholder="Latitude" type="text" value="<? echo $row[''] ?>">
                <label for="longitude">Longitude</label><input name="longitude" id="longitude"  class="input-xlarge" placeholder="Longitude" type="text">


                

                <p>
                    <span class="negrito">Importante :</span> após surgir o mapa, arraste o apontador até o local exato da Local da ocorrencia. </p>
                <div id="map-canvas" class="col50 f-right">
                    <div align="center" id="map" style="width: 100%; height:500px; width: 890px"></div>
                </div><!-- /map-canvas -->
            </div>

        </fieldset>

            <p>
            <input type="hidden"  name="acao" value="<?php echo $acao ?>">
            <input type="hidden"  name="id" value="<?php echo $id ?>">
            <input type="submit" style="width: 120px; display: block;color: #ffffff;margin: 10px auto;cursor: pointer;background: #069;" name="btem" value="<?php echo $acao ?> Dados">
        </p>
            



    </form>

    <script	type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script	type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript">
        var geocoder;
        var map;
        var infowindow = new google.maps.InfoWindow();
        var marker;

        $(document).ready(function(){
            //Show maps admin
            $('#btn-get-coordinates').live('click',function(){
                adminMapsCoordinates();
            });
            if( $('#latitude').val() && $('#longitude').val() ){
                adminMapsCoordinates();
            }


            //Prevent from submit on press ENTER
            $('#form-cadastro-empreendimento').keypress(function (e) {
                if(e.which == 13 && e.target.nodeName != "TEXTAREA"){
                    adminGetAddressToCoordinates();
                    return false;
                }
            });

        });

        var praca = new google.maps.LatLng(-12.2584856,-38.9709412);
        marcadorPraca = new google.maps.Marker({
            position: praca,
            map: map,
            title:"Praça da Cidade"
        });


        /**
         * Admin Maps Coordinates
         * @desc Gerencia a exibição do mapa no Insert de Imoveis.
         */
        function adminMapsCoordinates() {

            //Exibe as coordenadas e o mapa.
            $('#map').fadeIn();

            geocoder = new google.maps.Geocoder();
            var latlng = new google.maps.LatLng(-12.2584856,-38.9709412);
            var mapOptions = {
                scrollwheel: true,
                zoom: 15,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            map = new google.maps.Map(document.getElementById("map"), mapOptions);
            adminGetAddressToCoordinates();
            return false;
        }




        /**
         * Admin Get Address To Coordinates
         * @desc Pega a string de endereco e gera o pointer no mapa.
         */
        function adminGetAddressToCoordinates() {
            // var address = document.getElementById("address").value;
            var endereco = new Array();
            endereco[1] = $('#endereco').val();
            endereco[2] = ' - Feira de Santana';
            endereco[3] = $('#bairro').val();
            endereco[4] = '- Bahia';
            endereco[5] = ' - Brasil';

            var address = endereco.join(' ');
            geocoder.geocode( { 'address': address}, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);

                    //Passo os valores para o form.
                    updateCoordinatesValues(results[0].geometry.location.lat(),results[0].geometry.location.lng());
                    marker = new google.maps.Marker({
                        draggable: true,
                        map: map,
                        position: results[0].geometry.location

                    });

                    //Se rua, bairro e cidade estiverem vazios o zom mostra o brasil.
                    if(endereco[1] == '' && endereco[2] == '' && endereco[3] == '')
                        map.setZoom(4);
                    else
                        map.setZoom(15);

                    //DRAG AND DROP
                    google.maps.event.addListener(marker, "dragend", function(event) {
                        var point = marker.getPosition();
                        window.setTimeout(function(){
                            map.panTo(point);
                            updateCoordinatesValues(point.lat(), point.lng());

                        }, 100);
                    });
                } else {

                    showFeedback('#maps-feedback', 'Localização não encontrada.');
                    $('#map').fadeOut();
                    updateCoordinatesValues('','');

                }
            });
        }


        /**
         * Update CoordinatesValues
         * @desc Atualiza o valor das coordenadas.
         * @param lat String com o valor de Latitude.
         * @param long String com o valor de Longitude.
         */
        function updateCoordinatesValues(lat, lng)
        {
            $('#latitude').val(lat);
            $('#longitude').val(lng);
            return;
        }

        /**
         * Show Feedback
         * @desc Exibe mensagens de feedback.
         * @param element Seletor jQuery para o elemento onde sera mostrada a mensagem.
         * @param message Texto da mensagem a ser exibida.
         */
        function showFeedback(element, message)
        {
            if ( $(element).is(':visible'))
                $(element).text(message);
            else
                $(element).text(message).fadeOut().fadeIn();

            return;

        }






    </script>


    <script language="javascript">

        function verifica(){
            if(document.form1.nome.value==""){
                alert("Erro! O Campo \"Nome do informate\" está em branco!");
                document.form1.nome.focus();
                return false;
            }
// if(document.form1.opm.value==""){
// alert("Erro! O Campo \"OPM\" está em branco!");
//document.form1.sobrenome.focus();
// return false;
// }

            if(document.form1.file.value==""){
                alert("Erro! Favor selecionar uma foto!");
                document.form1.sobrenome.focus();
                return false;
            }

//Verificando se a combo do estado tem valor selecionado
// if(document.form1.email.value==""){
// alert("Erro! Informar o e-mail!");
// document.form1.estado.focus();
// return false;
//}
            return true;
        }
        //Função check analiza a função verifica e envia o formulário ou para o processo
        function check(){
            if(verifica())
                document.form1.submit();
        }
        //função teclaPress valida os campos caso o usuário
        //Pressione enter em um dos dois edits em vez de clicar no botão
        function teclaPress(){
            var tecla=event.keyCode;
            if(tecla===13){
                if(verifica())
                    return true;
                else
                    return false;
            }
            else
                return tecla;
        }
    </script>

<?php if($form == "homicidio" ){
    include "form_homicidio.php";

} ?>
</form>

</body>
</html>

