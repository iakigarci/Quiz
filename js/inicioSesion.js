function inicioSesion(){
    $('#insertq').show();
    $('#showq').show();
    $('#register').hide();
    $('#login').hide();
    $('#logout').show();
    $("#h1").append("<p><?php echo $_GET["email"];?></p>");
    $("#h1").append("<img width=\"50\" height=\"60\" src=\"data:image/*;base64,<?php echo getImagenDeBD();?>\" alt=\"Imagen\"/>");
}